@extends('layouts.app')
@section('content')
<div>
    <div class="row header">
        <div class="col-2">
            <h1>Get Your <br>Own Laptop!</h1>
            <p>The new way to get your own laptop.<br> Easier than ever, with a wide range of specs to find your liking.
            </p>
            <a href="/productspage" class="btn">Start Shopping &#8594; </a>
        </div>
        <div class="col-2">
            <img src="images/legion-y540.webp">
        </div>


    </div>

    <!------------ Brands------------>
    <div class="brands">
        <h2 class="title">Brands</h2>
        <div class="pageContainer">
            <div class="row">
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Lenovo" ?>"> <img src="images/brands/logo1.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Dell" ?>"> <img src="images/brands/logo2.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Asus" ?>"> <img src="images/brands/logo3.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Apple" ?>"> <img src="images/brands/logo4.png"></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Toshiba" ?>"> <img src="images/brands/logo6.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Msi" ?>"> <img src="images/brands/logo7.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "Microsoft" ?>"> <img src="images/brands/logo8.png"></a>
                </div>
                <div class="col-5">
                    <a href="/getproducts/<?php echo "HP" ?>"> <img src="images/brands/logo9.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Offer-->
    <div class="offer">
        <div class="pageContainer">
            <div class="row">
                <div class="col-2">
                    <img src="images/Products/Alienware/Alienware_6.png">
                </div>
                <div class="col-2">
                    <p>Special offer on Laptopify</p>
                    <h1>Silver AlienWare by Dell</h1>
                    <small>The incredibly thin and light MacBook Air is now more powerful than ever. It features a
                        brilliant Retina display, new Magic Keyboard, Touch ID, processors with up to twice the
                        performance,1 faster graphics, and double the storage capacity. The sleek wedge-shaped
                        design is created from 100 percent recycled aluminum, making it the greenest Mac ever.2 And
                        with all-day battery life, our most popular Mac is your perfectly portable, do-it-all notebook.</small><br>
                    <a href="/getlaptop/Dell/Alienware" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!--featured products-->
    <div class="pageContainer">
        <div class="row">
            <div class="col-4">
                <a href="/getlaptop/Acer/Predator"><img src="images/Products/Acer/Predator/1.jpg"></a>
                <h4>Acer Predator</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>24000 LE</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Dell/Alienware"> <img src="images/Products/Alienware/Alienware_1.jpg"></a>
                    <h4>ALIENWARE</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>39000 LE</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/HP/Omen"><img src="images/Products/HP/Omen/1.jpg"></a>
                    <h4>HP Omen</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>30000 LE</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Lenovo/Legion"> <img src="images/Products/Lenovo/Legion/1.jpg"></a>
                    <h4>Lenovo Legion</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>23000 LE</p>
            </div>
        </div>
    </div>

</div>
@endsection
