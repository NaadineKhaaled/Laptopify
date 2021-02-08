@extends('layouts.app')

    @section('content')

    <!----------------------------All Products------------------------------->
    <div class="pageContainer">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>

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
                <p>$5000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Dell/Alienware"><img src="/images/Products/Dell/Alienware/1.jpg"></a>
                <h4>Alienware</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$15000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Hp/omen"> <img src="/images/Products/HP/Omen/1.jpg"></a>
                <h4>HP Omen</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$95000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Lenovo/legion"> <img src="/images/Products/Lenovo/Legion/1.jpg"></a>
                <h4>Lenovo Legion</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$52000</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="/getlaptop/MSI/GF65"> <img src="/images/Products/MSI/GF65/1.jpg"></a>
                <h4>MSI</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$5000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Razer/blade"> <img src="/images/Products/Razer/blade/1.jpg"></a>
                <h4>Razer Blade</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$15000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Asus/Rog"> <img src="/images/Products/Asus/Rog/1.jpg"></a>
                <h4>Asus ROG Strix GL504GM Scar II Edition</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$95000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Lenovo/Legion"> <img src="/images/featured products/product4.jpg"></a>
                <h4>Lenovo Legion Y-740</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$52000</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="/getlaptop/Apple/Macbook"> <img src="/images/Products/Apple/Macbook/1.jpg"></a>
                <h4>Apple Macbook Pro</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$5000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Asus/Rog"> <img src="images/Products/Asus/Rog/2.jpg"></a>
                <h4>Asus ROG Strix GL504GM Scar II Edition</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$95000</p>
            </div>
            <div class="col-4">
                <a href="/getlaptop/Lenovo/l340"> <img src="images/Products/Lenovo/l340/1.jpg"></a>
                <h4>Lenovo Legion Y-740</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$52000</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

  @endsection
