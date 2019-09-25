<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;

class WebstoreController extends Controller
{
    public function index() {
    	$products = Product::all();

    	return view('home')->with('products', $products);
    }

    public function addToCart(Product $product) {
    	$input['id'] = $product->id;
    	$input['name'] = $product->name;
    	$input['qty'] = 1;
    	$input['price'] = $product->price;

    	Cart::add($input);

        return redirect()->to('/store');
    }

    public function removeFromCart($id) {
    	Cart::remove($id);

    	return redirect()->to('home')->with(['success' => 'Item Successfully removed from Cart']);
    }

    public function destroyCart() {
    	Cart::destroy();

    	return redirect()->to('home')->with(['success' => 'Cart removed Successfully']);
    }
}
