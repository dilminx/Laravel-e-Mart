<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    public function product()
    {
        $data = Product::all();
        return view('/product', ['products' => $data]);
    }
    public function product1()
    {
        $data = Product::all();
        return view('/welcome', ['products' => $data]);
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
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')
        ->orWhere('category', 'like', '%' . $request->input('query') . '%')->get();
        if ($data->isEmpty()) {
            return view('/notfound');

        } else {
            return view('/search', ['products' => $data]);
        }
    }

    public function addCart(Request $request){
        if($request->session()->has('user'))
        {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return  redirect('/product');
        }else{

            return view('login');
        }
    }
    // public static function cartItem(){
    //     $userId =Session::get('user')['id'];
    //     return Cart::where('user_id', $userId)->count();
    // }
    public static function cartItem()
    {
        $userId = Session::get('user')['id'] ?? null;

        // Check if userId exists
        if (!$userId) {
            return 0; // Return 0 if no user is logged in
        }

        return Cart::where('user_id', $userId)->count();
    }
    public function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)->select('products.*','cart.id as cart_id')->get();

        return view('cartlist', ['products' => $products]);
        }

        public function removeItem($id){

        Cart::destroy($id);
        return  redirect('/cartlist');
        }
    }