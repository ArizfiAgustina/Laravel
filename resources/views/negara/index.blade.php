@extends ('home')

@section ('content')
  <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Negara</h6>
              <a href="/negara/create" class="btn btn-primary float-end">Tambahkan</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Negara</th>
                      <th class="text-secondary opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($negara as $negara)
                    <tr>
                      <td> {{ $negara -> kode_negara }}</td>
                      <td> {{ $negara -> nama_negara }} </td>
                      <td> 
                        <a href="/negara/{{ $negara->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  @endforeach
                    
                    <tr>
                      <td> <td/>
                      <td> <td/>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection