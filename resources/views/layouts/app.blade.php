<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Laptopify | Get Your Own Laptop</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <div style="width: 100%">
        <div class="container">

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
                    <li>{{Auth::user()->name}}</li>

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

            @yield('content')

            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col1">
                            <h3>Download Our App</h3>
                            <p>Download our app for android and iOS.</p>
                            <div class="app-logo">
                                <img src="/images/Icons/playstore.png">
                                <img src="/images/Icons/appstore.png">
                            </div>
                        </div>
                        <div class="footer-col2">
                            <img src="/images/Icons/logo.png" style="max-width: 100px">
                            <p>Our Purpose is to get you your own personalized laptop.</p>
                        </div>
                        <div class="footer-col3">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>Contact Us</li>
                                <li>Return Policy</li>
                                <li>Services</li>
                                <li>Affiliates</li>
                            </ul>
                        </div>
                        <div class="footer-col4">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2020 - Laptopify</p>
                </div>
            </div>
            <!--script for menu-->
            <script>
                var MenuItems = document.getElementById("MenuItems");
                MenuItems.style.maxHeight = "0px";

                function menutoggle() {
                    if (MenuItems.style.maxHeight == "0px") {
                        MenuItems.style.maxHeight = "200px"
                    } else {
                        MenuItems.style.maxHeight = "0px"
                    }
                }
            </script>
            <script>
                var SearchBar = document.getElementById("SearchBar");
                var MenuItems = document.getElementById("MenuItems");
                SearchBar.style.visibility = "hidden";
                SearchBar.style.opacity = 0;

                function searchtoggle() {
                    if (SearchBar.style.visibility == "hidden") {
                        SearchBar.style.visibility = "visible";
                        SearchBar.style.opacity = 1;
                        MenuItems.style.visibility = "hidden";
                        MenuItems.style.opacity = 0;
                    } else {
                        MenuItems.style.visibility = "visible";
                        MenuItems.style.opacity = 1;
                        SearchBar.style.visibility = "hidden";
                        SearchBar.style.opacity = 0;
                    }
                }
            </script>

            <!-------------JS for product gallery------------>
            <script>
                var ProductImg = document.getElementById("ProductImg");
                var SmallImg1 = document.getElementById("small-img1");
                var SmallImg2 = document.getElementById("small-img2");
                var SmallImg3 = document.getElementById("small-img3");
                var SmallImg4 = document.getElementById("small-img4");
                SmallImg1.onclick = function() {
                    ProductImg.src = SmallImg1.src;
                }
                SmallImg2.onclick = function() {
                    ProductImg.src = SmallImg2.src;
                }
                SmallImg3.onclick = function() {
                    ProductImg.src = SmallImg3.src;
                }
                SmallImg4.onclick = function() {
                    ProductImg.src = SmallImg4.src;
                }
            </script>
</body>

</html>
