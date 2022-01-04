@extends('layouts.header')

@section('content')
<div class="container">
    <!-- Slider -->
    <div class="slider">
        <div class="slider-search">
            <form action="" method="post">
                <input type="text" name="txt_search" placeholder="nhập sản phẩm cần tìm">
                <input type="submit" value="Tìm">
            </form>
        </div>

        <div class="slider-producer">
            <h3 style="margin-left: 10%;">Loại sản phẩm:</h3>
            <br>
            <ul class="nav-producer" style="margin-left: 10%;">
                <li><a href="{{ url('/category')}}">Tất cả sản phẩm</a></li>
                @foreach($all_product as $key => $category)
                <li><a href="{{ url('/sptheoloai/'.$category->tenloaisp)}}">{{ $category->tenloaisp }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- End  Slider-->
    
    <!-- Product -->
    <div class="product">
        <div class="product-view">
            <!-- show product -->
            @foreach($all_category_loai as $key => $item)
            <div class="item-sp" style="display: flex; flex-direction: column; width: 30%;">
                <a href="{{ url('/chitietsp/'.$item->idsp)}}" style="color: black; width: 95%; height: 90%;">
                    <div class="product-item" style="width: 85%; height: 84%;">
                        <img style="width: 70%;" src="{{asset('public/backend/imgs/'.$item->anh)}}">
                        <div class="item-info">
                            <h3 style="font-size: 20px;">{{ $item->tensp }}</h3>
                            <div class="item-much" style="justify-content: center;">
                                <p style="opacity: 1;">{{ $item->gia }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <button class="btn btn-success">
                    Thêm Sản Phẩm
                </button>
            </div>
            @endforeach
        </div>
        <!-- End Product -->
    </div>
</div>
@endsection