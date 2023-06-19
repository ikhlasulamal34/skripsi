<?php

namespace App\Http\Controllers\landing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('landing.home');
    }
    public function produk (){
        return view('landing.product');
    }
    public function checkout (){
        return view('landing.checkout');
    }
}
