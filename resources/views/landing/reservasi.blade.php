@extends('landing.layout.app')
@section('main')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <div class="form-reservasi" style="padding-left: 20%; padding-right: 20%">
                        <div class="title-header">
                            <h3>Form Reservasi</h3>
                        </div>
                    <form action="" method="POST">
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="exampleInputEmail1" class="form-label">No HP</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No HP" required>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                          <label for="exampleInputEmail1" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                        </div>
                        <div class="mb-3" style="margin-bottom: 10px">
                            <label for="exampleFormControlTextarea1" class="form-label">Perihal</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Perihal" rows="3" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Pesan</button>
                      </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
