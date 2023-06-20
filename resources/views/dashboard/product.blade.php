@extends('dashboard.layout.app')
@section('name')
@include('sweetalert::alert')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title pb-1">Daftar Produk</h4>
                            <a href="/form-produk" class="btn btn-primary btn-sm">Tambah Produk</a>                      
                        </div>
                        <div class="card-body table-full-width">
                            <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Nama Produk</th>
                                    <th>Ketersediaan</th>
                                    <th>Harga</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Gambar 3</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach($produk as $produk)                                  
                                    <tr>
                                        <td>{{$produk->nama_produk}}</td>                                   
                                        <td>{{$produk->ketersediaan}}</td>
                                        <td>{{$produk->harga}}</td>
                                        <td>
                                            <img src="{{ asset('storage/image/produk/'.$produk->gambar1) }}" width="20%" alt="Gambar 1">
                                        </td>                      
                                        <td>
                                            <img src="{{ asset('storage/image/produk/'.$produk->gambar2) }}" width="20%" alt="Gambar 2">
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/image/produk/'.$produk->gambar3) }}" width="20%" alt="Gambar 3">
                                        </td>
                                        <td>
                                            <button class="btn btn-danger mr-2">Hapus</button>
                                            <button class="btn btn-warning">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection


