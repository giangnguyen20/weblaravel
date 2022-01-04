<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tenloaisp = DB::table('loaisp')->get();
        $new_product = DB::table('sanpham')->where('idloaisp','1')->orderBy('created_at', 'desc')->limit(4)->get();
        return view('home')->with('tenloai',$tenloaisp)->with('newproduct', $new_product);
    }
}
