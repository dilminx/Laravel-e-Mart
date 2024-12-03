<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $data = Product::all();
        return view('/product',['products'=>$data]);
    }
    public function product1(){
        $data = Product::all();
        return view('/welcome',['products'=>$data]);
    }
}
