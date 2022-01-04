<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chair Shop</title>
    <link rel="stylesheet" href="{{('public/fontend/style/style.css')}}">
    <link rel="stylesheet" href="{{('public/fontend/font/themify-icons-font/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/style/product-style.css')}}">
    <style>
        li {
            text-decoration: none;
            list-style-type: none;
        }

        a {
            color: black;
        }

        .product-item a {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .product-item .item-info .item-much {
            justify-content: center;
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
    </style>
</head>

<body>
    <div class="main">
        <!-- Header -->
        <div class="header">
            <div class="header-logo">
                <a href="#"><img src="{{('public/fontend/imgaes/your-logo.png')}}" alt="logo"></a>
            </div>

            <div class="header-nav">
                <ul class="nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @foreach($tenloai as $key => $item)
                    <li><a href="{{ url('/sptheoloai/'.$item->tenloaisp)}}">{{$item->tenloaisp}}</a></li>
                    @endforeach
                    <li><a href="#">About</a></li>
                </ul>
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
                    </a>|

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

        <!-- Banner -->
        <div class="banner">
            <div class="banner-img">
                <img src="{{('public/fontend/imgaes/banner.png')}}" alt="banner">
                <div class="about">
                    <div class="about-banner">
                        <p>Collection 2021</p>
                        <h1>nice chair</h1>
                    </div>
                    <div class="btn-banner">
                        <a href="{{ url('/category')}}" class="btn-shop">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->

        <!-- Product -->
        <div class="product">
            <div class="heading">
                <h2>NEW PRODUCT</h2>
            </div>
            <div class="product-view">
                @foreach($newproduct as $key => $item)
                <div class="item-sp" style="display: flex; flex-direction: column; width: 25%; align-items: center;">
                    <a href="{{ url('/chitietsp/'.$item->idsp)}}" style="color: black; width: 80%; height: 90%;">
                        <div class="product-item" style="width: 100%; height: 100%;">
                            <img style="width: 70%;" src="{{asset('public/backend/imgs/'.$item->anh)}}">
                            <div class="item-info">
                                <h3>{{ $item->tensp }}</h3>
                                <div class="item-much" style="justify-content: center;">
                                    <p style="opacity: 1;">{{ $item->gia }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Product -->

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
    </div>
</body>

</html>