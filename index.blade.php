@extends('list.layout')
 
@section('konten')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <h1>Selamat Datang Di List API </h1>
  <a href="{{ route('lists.create')}}" class="btn btn-primary">Tambah</a><br>
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">LIST API</h1>
          </div>
 <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-1">
              <!-- Color System -->
              <div class="row">
                <div>
                  @foreach($lists as $list)
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      <a class="text-black-50 large" href="{{ $list->url }}">{{ $list->nama }}</a>
                    </div>
                  </div>
                   @endforeach
                </div>
              </div>
            </div>
          </div>
@endsection