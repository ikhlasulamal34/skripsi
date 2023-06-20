<?php

namespace App\Http\Controllers\landing;
use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $produk = Product::inRandomOrder()->get();
        return view('landing.home',compact('produk'));
    }

    public function mobil(){
        $produk = Product::where('kategori', 'mobil')->get();
        return view('landing.mobil', compact('produk'));
    }
    public function motor(){
        $produk = Product::where('kategori', 'motor')->get();
        return view('landing.mobil', compact('produk'));
    }
    public function aksesoris(){
        $produk = Product::where('kategori', 'Aksesoris Ruangan')->get();
        return view('landing.mobil', compact('produk'));
    }
    public function reservasi(){
        $produk = Product::all();
        return view('landing.reservasi',compact('produk'));
    }

    public function showProduk($id){
        $produk = Product::findOrFail($id);
        return view('landing.product', compact('produk'));
}

    public function checkout (){
        return view('landing.checkout');
    }
}
