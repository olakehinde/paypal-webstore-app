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

    public function addToCart(Product $product) {
    	$input['id'] = $product->id;
    	$input['name'] = $product->name;
    	$input['qty'] = 1;
    	$input['price'] = $product->price;

    	Cart::add($input);

        return redirect()->to('/store');
    }
}
