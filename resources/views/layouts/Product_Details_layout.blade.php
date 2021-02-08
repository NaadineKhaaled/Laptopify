@extends('layouts.app')
@section('content')
    @yield('product')
    <div class="pageContainer">
        <h2 class="title">Related Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="/getlaptop/Acer/Predator"><img src="/images/Products/Acer/Predator/1.jpg"></a>
                <h4>Acer Predator</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$1100</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/dell/Alienware"><img src="/images/Products/Dell/Alienware/1.jpg"></a>
                <h4>ALIENWARE</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$2500</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/HP/Omen"><img src="/images/Products/HP/Omen/1.jpg"></a>
                <h4>HP Omen</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$1500</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Lenovo/Legion"><img src="/images/Products/Lenovo/Legion/1.jpg"></a>
                <h4>Lenovo Legion</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$1600</p>
            </div>
        </div>
    </div>
@endsection
