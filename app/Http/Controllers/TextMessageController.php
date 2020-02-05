<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kavenegar;
use App\TextMessage;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

class TextMessageController extends Controller
{
    const FORMAT = "%s = %s <br/>";

    public function __construct()
    {
        $this->middleware('auth')->only('index');
        $this->middleware('master')->only('index');
    }

    public function index(Request $request)
    {
        $text_messages = TextMessage::query();
        if ($request->receptor) {
            $text_messages = $text_messages->where('receptor', 'like', "%$request->receptor%");
        }
        $text_messages = $text_messages->latest()->paginate(20);
        return view('dashboard.text_messages.index', compact('text_messages'));
    }

    public static function store($template, $receptor, $tokens='')
    {
        if (is_array($tokens) && count($tokens)) {
            $tokens = implode('&&&', $tokens);
        }
        return TextMessage::create([
            'template' => $template,
            'receptor' => $receptor,
            'tokens' => $tokens,
        ]);
    }

}
