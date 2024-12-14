@extends('home')

@section('content')
    <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tambahkan Negara</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form action="/negara" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Negara</label>
                    <input name="kode_negara" type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="Kode Negara">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Negara</label>
                    <input name="nama_negara" type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="Nama Negara">
                </div>
                
  
  <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
            </div>
    </div>
@endsection