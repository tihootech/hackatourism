<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('artisan');
    }

    public function index()
    {
        // ===== preparing query needed to retrieve products from databae
        $products = Product::query();

        // ==== artisans can only see their own products
        if (isArtisan()) {
            $products = $products->where('artisan_id', currentArtisan('id'));
        }

        // ==== paginating results
        $products = $products->paginate(20);

        // ==== return proper view
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product;
        return view('dashboard.products.form', compact('product'));
    }

    public function store(Request $request)
    {
        // ==== validate request and prepare data
        $data = self::validation(new Product);

        // ==== store in database
        $data['uid'] = randomString(); // a random string as slug
        $data['artisan_id'] = currentArtisan('id'); // id of current logged in artisan
        $product = Product::create($data);

        // upload and store new images
        $product->uploadAndStoreNewImages($request->images);

        // ==== redirect after process
        return redirect()->route('product.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.form', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // ==== validate and update record in database
        $data = self::validation($product);
        $product->update($data);

        // ==== redirect after process
        return redirect()->route('product.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->withMessage(__('OPERATIONS_SUCCESSFUL'));
    }

    private static function validation()
    {
        return request()->validate([
            'title' => 'required|string:max:250',
            'price' => 'required|integer',
            'discount' => 'nullable|integer|min:0|max:100',
            'available_count' => 'required|integer',
            'info' => 'nullable',
        ]);
    }
}
