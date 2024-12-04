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
    public function details($id)
    {
        // Fetch the product by ID
        $product = Product::find($id);

        // Handle the case where the product doesn't exist
        if (!$product) {
            abort(404, 'Product not found');
        }

        // Pass the product to the 'detail' view
        return view('detail', ['product' => $product]);
    }

    public function search(Request $request)
    {
         $data = Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('/search',['products'=>$data]);
    }
    
}
