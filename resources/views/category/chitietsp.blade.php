<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container .chitietproduct .row .img img{
            width: 100%;
            box-shadow: 0 0 4px 4px #ccc;
        }

        .container .chitietproduct .row .info a{
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
            z-index: 999;
        } 
    </style>

</head>
<body>
    
</body>
</html>
@extends('layouts.header')

@section('content')
<!-- chi tiết sản phẩm -->
<div class="container">
    <div class="chitietproduct" style="margin-bottom: 40px;">
        @foreach($info as $key => $item)
        <div class="row" style="margin-top: 80px;">
            <div class="col-md-6 img">
                <img src="{{asset('public/backend/imgs/'.$item->anh)}}" alt="ảnh sản phẩm">
            </div>
            <div class="col-md-6 info" style="display: flex; flex-direction: column;">
                <p><a href="{{ url('/home')}}">Trang chủ</a> / <a href="{{ url('/category')}}">Sản Phẩm</a> / {{$item->tensp}}</p>
                <h2>{{ $item->tensp}}</h2>
                <div class="col-md-12">
                    <ul style="display: flex; list-style-type: none; margin: 0px; padding: 0px;">
                        <li style="color: orange; font-size: 13pt; padding-top: 2px; margin-right: 5px;">5.0</li>
                        <li style="color: orange; padding: 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        </li>
                        <li style="color: orange; padding: 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        </li>
                        <li style="color: orange; padding: 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        </li>
                        <li style="color: orange; padding: 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        </li>
                        <li style="color: orange; padding: 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="info-sp" style="margin-top: 8px;">
                    <h4>Chi tiết sản phẩm: </h4>
                    <div class="col-md-12" style="margin-left: 32px;">
                        <p style="margin-bottom: 0;">{{$item->chitietsanpham}}'</p>
                    </div>
                </div>
                <h3 style="color: red; margin: 16px 0;">{{ $item->gia}} VND</h3>


                <div class="soluong" style="display: flex;">
                    <button class="btn btn-light" style="border: solid grey 1px; border-radius: 4px;" onclick="addMoreCart(1)">+</button>
                    <input type="number" name="num" value="1" class="form-control" step="1" style="max-width: 90px; border: solid grey 1px; border-radius: 4px;" onchange="fixnum()">
                    <button class="btn btn-light" style="border: solid grey 1px; border-radius: 4px;" onclick="addMoreCart(-1)">-</button>
                </div>

                <div class="smg">
                    <p style="color: red;"></p>
                </div>

                <button class="btn btn-success" style="margin-top: 20px; width: 100%;" onclick="">
                    Thêm vào giỏ hàng
                </button>

                <a href="#" class="btn btn-success" style="width: 100%; margin-top: 20px; background-color: #ccc;">Xem Giỏ Hàng</a>

            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End chi tiết sản phẩm -->

@endsection