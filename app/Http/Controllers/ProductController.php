<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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

    public function addCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/product');
        } else {

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
    public function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)->select('products.*', 'cart.id as cart_id')->get();

            

                return view('cartlist', ['products' => $products]);
            
    }

    public function removeItem($id)
    {

        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function ordernow()
    {

        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select(DB::raw('SUM(REPLACE(products.price, " ", "")) as total_price'))
            ->first()
            ->total_price;
            if (!$total) {

            return redirect('/product');
                
            }

        return view('ordernow', ['total' => $total]);


    }
    public function checkout(Request $request)
    {
        $userId = Session::get('user')['id'];

        // Debugging Session User ID
        if (!$userId) {
            return back()->with('error', 'User not logged in.');
        }

        $allcart = Cart::where('user_id', $userId)->get();

        foreach ($allcart as $cart) {
            $order = new Order();
            $order->user_id = $cart->user_id;
            $order->product_id = $cart->product_id;
            $order->status = 'pending';
            $order->payment_method = $request->input('payment');
            $order->payment_status = 'pending';
            $order->address = $request->input('address');
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }

        return redirect('/product')->with('success', 'Order placed successfully!');
    }

    public function myOrders(){
        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
            

        return view('myOrders', ['orders' => $orders]);
    }
}