<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_user;
use App\Models\User;
use App\Models\product;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

   /* public function storeAtDataBase ($product_id)
    {
        $user = auth()->user();
        $product_user= new product_user();
       //$order=new Order();
        $product_user->user_ID=$user->email;
        $product_user->product_ID=$product_id;
        //$order->email=$user->email;
        //$order->product_ID=$product_id;
        $products=product::where('product_id',$product_id)->get();
        foreach ($products as $product) {
            $product_user->price=$product->price;
        }
        $product_user->save();
        //$order->save();
        return view('addtocart');
    }*/



    public function viewCart (){
        $product_users = product_user::all();
        $user = auth()->user();
        $products= product::all();
        $orders=Order::all();
        $total=0.0;
        foreach($orders as $order)
            if($order->email == $user->email)
                foreach($products as $product)
                    if($product->product_id == $order->product_ID) {
                        $total=$total+$order->price;
                    }
        $shipping = 0.14*$total;
        $finalTotal = $shipping + $total;
        return view('cart')->with(['product_users'=>$product_users, 'products'=>$products, 'user'=>$user,'total'=>$total, 'shipping'=>$shipping, 'finalTotal'=>$finalTotal]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->user();
        $product_id = product_user::where(['product_ID' => $id, 'user_ID' => $user->email]);
        $product_id->delete();$product_users = product_user::all();
        $order = Order::where(['product_ID' => $id, 'email' => $user->email]);
        $order->delete();
        $user = auth()->user();
        $products= product::all();
        $orders=Order::all();
        $total=0.0;
        foreach($orders as $order)
            if($order->email == $user->email)
                foreach($products as $product)
                    if($product->product_id == $order->product_ID) {
                        $total=$total+$order->price;
                    }
        $shipping = 0.14*$total;
        $finalTotal = $shipping + $total;
        return view('cart')->with(['product_users'=>$product_users, 'products'=>$products, 'user'=>$user,'total'=>$total, 'shipping'=>$shipping, 'finalTotal'=>$finalTotal]);

    }
}
