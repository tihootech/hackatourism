<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(6)->get();
    	return view('landing.index', compact('products'));
    }
}
