@extends('dashboard.layout.app')
@section('name')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card p-2">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Produk</h4>
                        </div>
                        <div class="card-body">
                            <form action="/insert-produk" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md pr-1">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" class="form-control" name="nama_produk"
                                                placeholder="Nama Barang" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control" name="harga"
                                                placeholder="Harga Barang" required>
                                        </div>
                                    </div>
                                    <div class="col-md px-1">
                                        <div class="form-group">
                                            <label>Ketersediaan</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="ketersediaan" required>
                                                <option selected disabled value="">-- Pilih Ketersediaan --</option>
                                                <option value="Pre Order">Pre Order</option>
                                                <option value="Ready Stock">Ready Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="stok"
                                                placeholder="Stok Barang" required>
                                        </div>
                                    </div>
                                    <div class="col-md px-1">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="kategori" required>
                                                <option selected disabled value="">-- Pilih Kategori --</option>
                                                <option value="Mobil">Mobil</option>
                                                <option value="Motor">Motor</option>
                                                <option value="Aksesoris Ruangan">Aksesoris Ruangan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Gambar 1</label>
                                            <input type="file" class="form-control" name="gambar1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Gambar 2</label>
                                            <input type="file" class="form-control" name="gambar2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Gambar 3</label>
                                            <input type="file" class="form-control" name="gambar3" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Produk</label>
                                            <input id="deskripsi" type="hidden" name="deskripsi" required>
                                            <trix-editor input="deskripsi" required></trix-editor>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button> --}}
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection
