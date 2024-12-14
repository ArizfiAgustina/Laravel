@extends('home')

@section('content')
    <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tambahkan Provinsi</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form action="/provinsi" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                    <input name="kode_provinsi" type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="Kode Provinsi">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Negara</label>
                    <input name="nama_provinsi" type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="Nama Provinsi">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kota</label>
                    <input name="kota" type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="Kota">
                </div>
                
  
  <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
            </div>
    </div>
@endsection