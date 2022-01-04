<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();

class CategoryController extends Controller
{
    public function show_category(){
        $all_category_product = DB::table('loaisp')->get();
        $all_product = DB::table('sanpham')->get();
        return view('category.product')->with('all_product', $all_category_product)->with('all_category_loai', $all_product);
    }

    //sản phẩm theo loại
    public function show_loai_sp($tenloai){
        $idloai = DB::table('loaisp')->where('tenloaisp',$tenloai)->first();
        $id = $idloai->idloaisp;
        $all_category_loai = DB::table('sanpham')->where('idloaisp', $id)->orderBy('gia','desc')->get();
        
        $all_category_product = DB::table('loaisp')->get();

        return view('category.loaisp')->with('all_category_loai', $all_category_loai)->with('all_product', $all_category_product);
    }

    //thông tin chi tiết sản phẩm
    public function chitietsp($idsp){
        $info = DB::table('sanpham')->where('idsp', $idsp)->get();

        return view('category.chitietsp')->with('info', $info);
    }
}
