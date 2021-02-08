@extends('layouts.Product_Details_layout')

@section('product')

<!----------------------------Single Product Details------------------------------->
<div class="pageContainer single-product">
    <div class="row">
        <div class="col-2" style="max-width: 1500px; max-height:  1000px">
            <img src="/images/Products/{{$product->brand}}/{{$product->model}}/1.jpg" width="100%" id="ProductImg">
            <div class="small-img-row">
                <div class="small-img col">
                    <img src="/images/Products/{{$product->brand}}/{{$product->model}}/2.jpg" width="100%" id="small-img1">
                </div>
                <div class="small-img col">
                    <img src="/images/Products/{{$product->brand}}/{{$product->model}}/3.jpg" width="100%" id="small-img2">
                </div>
                <div class="small-img col">
                    <img src="/images/Products/{{$product->brand}}/{{$product->model}}/4.jpg" width="100%" id="small-img3">
                </div>
            </div>

        </div>

        <div class="col-2">
            <h1>{{$product->brand}} - {{$product->model}}</h1>
            <h4>${{$product->price}}</h4>
            <select>
                <option>Select Storage Capacity</option>
                <option>500GB</option>
                <option>1TB</option>
                <option>2TB</option>
            </select>
            <input type="number" value="1">
            @if(Auth::check())
            <a href="{{url('/donecart',$product->product_id)}}" class="btn">Add To Cart</a>
            @else
            <a href="{{url('/login')}}" class="btn">Add To Cart</a>
            @endif
            <h3>Product Details <i class="fa fa-bars"></i></h3>
            <br>
            <p>The incredibly thin design and unrelenting power of the Alienware m15 R3 and m17 R3 laptops let you
                game like never before.</p>
        </div>

    </div>
</div>
<!----------------------------Featured Products------------------------------->




@endsection
