@extends('table.layout')
 
@section('konten')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <h1>Selamat Datang Tabel Hak Akses </h1>
  <br>
 <div class="row justify-content-center">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Table List Hak Akses</h6>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Hak Akses</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Hak Akses</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     @foreach($tables as $table)
                    <tr>
                      <td>{{ $table->id }}</td>
                      <td>{{ $table->nama }}</td>
                      <td>{{ $table->hak_akses }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="{{ route('forms.create')}}" class="btn btn-primary">Tambah</a>
              </div>
            </div>
          </div>

    </div>
@endsection