<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        // foreach($products as $product) {
        //     echo 'Title ' .$product->title;
        //     echo 'Price ' .$product->price;
        //     echo '<br>';
        //     echo '---------';
        //     echo '<br>';

        // }
        return view('home.index');
    }
}
