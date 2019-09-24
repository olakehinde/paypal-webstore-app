<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;

class WebstoreController extends Controller
{
    public function index() {
    	$products = Product::all();

    	return view('store')->with('products', $products);
    }
}
