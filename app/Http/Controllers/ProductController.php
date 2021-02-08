<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_user;
use App\Models\User;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productspage');
    }


    public function viewCart (){
        $product_users = product_user::all();
        $user = auth()->user();
        $products= product::all();
        //$orders=Order::all();
        $total=0.0;
        foreach($product_users as $product_user)
            if($product_user->user_ID == $user->email)
                foreach($products as $product)
                    if($product->product_id == $product_user->product_ID) {
                        $total=$total+$product_user->price;
                    }
        $shipping = 0.14*$total;
        $finalTotal = $shipping + $total;
        return view('cart')->with(['product_users'=>$product_users, 'products'=>$products, 'user'=>$user,'total'=>$total, 'shipping'=>$shipping, 'finalTotal'=>$finalTotal]);
    }

    public function storeAtDataBase ($product_id)
    {
        $user = auth()->user();
        $product_user= new product_user();
        $product_user->user_ID=$user->email;
        $product_user->product_ID=$product_id;
        $products=product::where('product_id',$product_id)->get();
        foreach ($products as $product) {
            $product_user->price=$product->price;
        }
        $product_user->save();
        return view('productspage');
    }

    public function getbrands($brands) {
        $products = product::where('brand', $brands)->get();
        return view('Productss')->with('products',  $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->price = $request->price;
        //  $product->rating = $request->rating;
        $product->rating = $request->rating;
        $product->ram	 = $request->ram;
        $product->displaySize = $request->displaySize;
        $product->processor = $request->processor;
        $product->HDD = $request->HDD;
        $product->SSD = $request->SSD;
        $product->Graphics = $request->Graphics;
        $product->image = $request->image;
        $product->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('laptopslayout');
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
        $product_id->delete();
        $product_users = product_user::all();
        //$order = Order::where(['product_ID' => $id, 'email' => $user->email]);
        //$order->delete();
        $user = auth()->user();
        $products= product::all();
        //$orders=Order::all();
        $total=13.0;
        foreach($product_users as $product_user)
            if($product_user->user_ID == $user->email)
                foreach($products as $product)
                    if($product->product_id == $product_user->product_ID) {
                        $total=$total+$product_user->price;
                    }
        $shipping = 0.14*$total;
        $finalTotal = $shipping + $total;
        return view('cart')->with(['product_users'=>$product_users, 'products'=>$products, 'user'=>$user,'total'=>$total, 'shipping'=>$shipping, 'finalTotal'=>$finalTotal]);

    }

    public function searchmodel($model) {
        $products = product::where('brand', $model)->get();
        return view('searchlayout')->with('products',  $products);
    }

    public function getmodel($brand, $model) {
        $product = product::where(['brand' => $brand , 'model' => $model])->first();
        return view('Product')->with('product', $product);
    }

    public function showdetails() {
        $products= product::where('model','Alienware')->get();
       return view('Product')->with('products',$products);
    }

    public function showSearch(Request $request){

        $products = product::where('brand', $request->input('searchText'))->get();
        return view('Productss')->with('products', $products);
    }
}
