<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{asset('public/fontend/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/font/themify-icons-font/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/style/product-style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        a {
            color: black;
        }

        li {
            list-style-type: none;
        }

        .header-item_user {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .container .chitietproduct .row .img img {
            width: 100%;
            box-shadow: 0 0 4px 4px #ccc;
        }

        .container .chitietproduct .row .info a {
            text-decoration: none;
            color: black;
        }

        .container .chitietproduct .row .info a:hover {
            text-decoration: underline;
        }

        .cart-icon {
            position: fixed;
            z-index: 999;
            right: 0;
            top: 45%;
        }

        .cart-icon img {
            width: 45px;
        }

        .cart-icon .cart-count {
            background-color: red;
            color: black;
            font-size: 16px;
            padding: 4px;
            border-radius: 5px;
            position: relative;
            right: -16px;
            top: -24px;
            z-index: 999;
        }

        .btn {
            background-color: #4fac00;
            border: 0;
            padding: 8px;
            border-radius: 4px;
            max-width: 50%;
            margin: 0 auto 32px auto;
            box-shadow: #157347 1px 1px 1px 1px;
        }

        .btn:hover {
            background: #157347;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main">
        <!-- Header -->
        <div class="header" style=" height: 55px;">
            <div class="header-logo">
                <img src="{{asset('public/fontend/imgaes/your-logo.png')}}" alt="logo" style="height: 55px;">
            </div>

            <div class="header-content">
                <div class="header-nav">
                    <ul class="nav">
                        <li><a href="{{ url('/home')}}">Home</a></li>
                        <li><a href="{{ url('/sptheoloai/'.'Gaming')}}">Gaming</a></li>
                        <li><a href="{{ url('/sptheoloai/'.'Office')}}">Office</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>

            </div>
            <div class="header-item">
                @guest
                <div class="top-right links">
                    <a href="{{ route('login') }}">Login</a>|
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif

                </div>

                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="caret">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="float: right;">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </div>
        </div>
        <!-- End Header -->
    </div>
    @yield('content')

    <!-- giỏ hàng -->
    <span class="cart-icon">
        <span class="cart-count">0</span>
        <img src="https://gokisoft.com/img/cart.png">
    </span>
    <!-- end giỏ hàng -->

    <!-- footer -->
    <div class="footer">
        <div class="footer-about-us">
            <h2 class="text-white">ABOUT US</h2>
            <p style="color: #ccc;">
                Website cung cấp những loại ghế gaming đủ
                các kiểu dáng, màu sắc với giá cả hợp lý
                phù hợp cho tất cả các gamer
            </p>
            <div class="icon">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-instagram"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>

        <div class="footer-information">
            <h2 class="text-white">INFORMATION</h2>
            <a href="#">About us</a>
            <a href="#">Delivery information</a>
            <a href="#">policy</a>
            <a href="#">Tems & Cotdition</a>
            <a href="#">Future</a>
        </div>

        <div class="footer-myaccount">
            <h2 class="text-white">MY ACCOUNT</h2>
            <a href="#">My Account</a>
            <a href="#">My Cart</a>
            <a href="#">Login</a>
            <a href="#">Without</a>
            <a href="#">Checkout</a>
        </div>

        <div class="footer-contact">
            <h2 class="text-white">CONTACT</h2>
            <input type="text" placeholder="Your Mail">
            <a href="#">Send Mail</a>
        </div>
    </div>
    <!-- End footer -->
</body>

</html>