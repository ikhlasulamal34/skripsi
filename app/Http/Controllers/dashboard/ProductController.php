<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $produk = Product::all();
        return view('dashboard.product',compact('produk'));
    }

    public function formProduct(){
        return view('dashboard.insertProduct');
    }

    public function insertProduk(Request $request)
    {
        $product = new Product();
        $product->nama_produk = $request->input('nama_produk');
        $product->harga = $request->input('harga');
        $product->ketersediaan = $request->input('ketersediaan');
        $product->kategori = $request->input('kategori');
        $product->stok = $request->input('stok');
        $product->deskripsi = $request->input('deskripsi');
    
        if ($request->hasFile('gambar1')) {
            $file = $request->file('gambar1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/produk', $filename);
            $product->gambar1 = $filename;
        }
    
        if ($request->hasFile('gambar2')) {
            $file = $request->file('gambar2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/produk', $filename);
            $product->gambar2 = $filename;
        }
    
        if ($request->hasFile('gambar3')) {
            $file = $request->file('gambar3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/produk', $filename);
            $product->gambar3 = $filename;
        }
    
        $product->save();
    
        return redirect()->route('Daftar Produk')->with('success', 'Produk berhasil ditambahkan');
    }
    
}