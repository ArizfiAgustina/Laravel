@extends('home')

@section('content')
    <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit Negara</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form action="/negara/{{ $negara->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Negara</label>
                    <input name="kode_negara" type="kode" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" placeholder="kode" value=" {{ $negara->kode_negara }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Negara</label>
                    <input name="nama_negara="nama" class="form-control" id="exampleInputNama" placeholder="nama" value=" {{ $negara->nama_negara }}">
                    </div>
  
  <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
            </div>
    </div>
@endsection