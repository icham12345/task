@extends('list.layout')

@section('konten')
<div class="card uper">
  <div class="card-header">
    Form Tambah Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('lists.store') }}">
        @csrf
          <div class="form-group"> 
              <label>Nama</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label>URL</label>
              <input type="text" class="form-control" name="url"/>
          </div>
          <button type="submit" class="btn btn-primary">INPUT</button>
      </form>
  </div>
</div>
@endsection