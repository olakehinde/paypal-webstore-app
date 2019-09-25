<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = [
            'product 1' => [
                'name' => 'Product 1',
                'price' => 40
            ],
            'product 2' => [
                'name' => 'Product 2',
                'price' => 50
            ],
            'product 3' => [
                'name' => 'Product 3',
                'price' => 80
            ],
        ];
        // $products = (object) $getProducts;

        return view('home')->with('products', $products);
    }
}
