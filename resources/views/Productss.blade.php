@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($products as $product)
    <div class="col-4">
        <a href="/getlaptop/{{$product->brand}}/{{$product->model}}"> <img src="/images/Products/{{$product->brand}}/{{$product->model}}/1.jpg"></a>
        <h4>{{$product->brand}}</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>{{$product->price}} LE</p>
        @if(Auth::check())
        <a href="{{url('/donecart',$product->product_id)}}" class="btn btn-primary">ADD TO CART</a>
        @else
        <a href="{{url('/login')}}" class="btn btn-primary">ADD TO CART</a>
        @endif
    </div>
    @endforeach

</div>

@endsection
