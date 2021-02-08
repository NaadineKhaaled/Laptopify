<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        .cart {
            margin: 20px 20px;
        }

        .cards {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="/style.css">

    <title></title>
</head>

<body>
    <!-- Navbar content -->
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span></div>
        <div class="logo">Laptopify</div>
        <div class="nav-items">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>
                <a href="{{url('/productspage')}}">
                    <div class="dropdown">
                        <button class="dropbtn">Products</button>
                        <div class="dropdown-content">
                            <a href="/getproducts/<?php echo "Acer" ?>" style="color: #000;">Acer</a>
                            <a href="/getproducts/<?php echo "Apple" ?>" style="color: #000;">Apple</a>
                            <a href="/getproducts/<?php echo "Asus" ?>" style="color: #000;">Asus</a>
                            <a href="/getproducts/<?php echo "HP" ?>" style="color: #000;">HP</a>
                            <a href="/getproducts/<?php echo "Lenovo" ?>" style="color: #000;">Lenovo</a>
                            <a href="/getproducts/<?php echo "Microsoft" ?>" style="color: #000;">Microsoft</a>
                            <a href="/getproducts/<?php echo "Razer" ?>" style="color: #000;">Razer</a>
                            <a href="/getproducts/<?php echo "Toshiba" ?>" style="color: #000;">Toshiba</a>
                        </div>
                    </div>
                </a>
            </li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
            @if(Auth::check())
            <li><a href="{{url('/logout')}}">Logout</a></li>
            <li><a href="{{url('/cart')}}"><img src="/images/cart.png"></i>

                </a></li>
            @else
            <li><a href="{{url('/login')}}">Login</a></li>
            @endif
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span></div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span></div>
        <form action="{{url('/showSearch')}}" method="POST">
            @csrf
            <input type="search" class="search-data" name="searchText" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>
    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = () => {
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = () => {
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";
        }
        searchBtn.onclick = () => {
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>
    <section class="cart">

        <div class="row">
            <div class="col-lg-8" class="cart">
                <div class="mb-3">
                    <div class="pt-4 wish-list">

                        <h5 class=" mb-4">Cart</h5>

                        @foreach($product_users as $product_user)
                        @if($product_user->user_ID == $user->email)
                        @foreach($products as $product)
                        @if($product->product_id == $product_user->product_ID)


                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="/images/Products/{{$product->brand}}/{{$product->model}}/1.jpg" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>{{$product->brand}}</h5>
                                            <p class="mb-3 text-muted text-uppercase small">Model: {{$product->model}}</p>
                                            <p class="mb-2 text-muted text-uppercase small">RAM: {{$product->ram}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">Processor: {{$product->processor}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">SSD: {{$product->SSD}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">HDD: {{$product->HDD}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">DisplaySize: {{$product->displaySize}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">Rating: {{$product->rating}}</p>
                                            <p class="mb-3 text-muted text-uppercase small">Price: {{$product->price}}</p>
                                            <a href="/delete/{{$product->product_id}}">Remove Item</a>
                                        </div>
                                        <div>
                                            <div class="def-number-input number-input safari_only mb-0 w-100">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus decrease"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus increase"></button>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                (Note, 1 piece)
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                        <hr class="mb-4">

                        <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                            items to your cart does not mean booking them.</p>

                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">

                        <h5 class="mb-4">Expected shipping delivery</h5>

                        <p class="mb-0">
                            <?php
                            $mytime = Carbon\Carbon::now();
                            echo $mytime->toDateTimeString();
                            ?>
                        </p>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">
                        <h5 class="mb-3">The total amount of</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Items price
                                @if(is_null($product_users))
                                <span> 0 </span>
                                @else
                                <span>{{$total}}</span>
                                @endif
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>{{$shipping}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT (10%))</p>
                                    </strong>
                                </div>
                                <span><strong>{{$finalTotal+0.1*$finalTotal}}</strong></span>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-primary btn-block">go to checkout</button>

                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">

                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Block Content-->
</body>

</html>
