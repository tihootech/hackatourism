<?php

namespace App\Http\Controllers;

use App\Artisan;
use App\City;
use App\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('master')->except('store');
    }

    public function index()
    {
        $artisans = Artisan::paginate(20);
        return view('dashboard.artisans.index', compact('artisans'));
    }

    public function create()
    {
        $artisan = new Artisan;
        $cities = City::all();
        return view('dashboard.artisans.form', compact('artisan', 'cities'));
    }

    public function store(Request $request)
    {
        // ==== validating request and creating data
        $data = self::validation();

        // ==== create user account for new artisan
        $username = $request->mobile; // username is artisan's mobile number
        $password = rand(1000, 9999); // create a random 4 digit password for user
        $user = User::newArtisan($username, $password);

        // ==== inform new artisan via text message
        TextMessageController::store('newartisan', $request->mobile, [$username, $password]);

        // ==== store new artisan in database
        $data['uid'] = randomString(); // a random string as slug
        $data['user_id'] = $user->id;
        Artisan::create($data);

        // ==== redirect after process
        return redirect()->route('artisan.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    public function edit(Artisan $artisan)
    {
        $cities = City::all();
        return view('dashboard.artisans.form', compact('artisan', 'cities'));
    }

    public function update(Request $request, Artisan $artisan)
    {
        // ==== validating request and creating data
        $data = self::validation($artisan->id);

        // update artisan instance with validated data
        $artisan->update($data);

        // ==== redirect after process
        return redirect()->route('artisan.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    public function destroy(Artisan $artisan)
    {
        $artisan->delete();
        return redirect()->route('artisan.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    private static function validation($artisan_id=0)
    {
        return request()->validate([
            'first_name' => 'required|string:max:250',
            'last_name' => 'required|string:max:250',
            'mobile' => 'required|digits:11|unique:artisans,mobile,'.$artisan_id,
            'city_id' => 'required|exists:cities,id',
            'activity_type' => 'required|integer|min:1|max:2',
            'address' => 'required',
            'info' => 'nullable',
        ]);
    }
}
