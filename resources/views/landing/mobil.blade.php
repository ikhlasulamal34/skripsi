@extends('landing.layout.app')
@section('main')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" style="padding-bottom: 10%">
                        <div class="products-tabs">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                @if($produk->isEmpty())
                                <<p>Tidak Ada Data Produk Mobil.</p>
                                @else
                                @foreach ($produk as $produk)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('storage/image/produk/' . $produk->gambar2) }}" alt="Gambar 1">
                                            <div class="product-label">
                                                <span class="new">{{ $produk->ketersediaan }}</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $produk->kategori }}</p>
                                            <h3 class="product-name"><a href="/produk/{{$produk->id_produk}}">{{ $produk->nama_produk }}</a></h3>
                                            <h4 class="product-price">Rp.{{ $produk->harga }}</h4>
                                            
                                            <div class="product-label">
                                                <span class="new">Stok {{ $produk->stok }} Pcs</span>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                cart</button>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
