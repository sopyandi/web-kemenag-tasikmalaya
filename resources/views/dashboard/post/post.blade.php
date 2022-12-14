@extends('dashboard/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Kamu </h1>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left:-2.5%;">
        Berita Berjudul <strong class="">{{session('judul')}}</strong> Telah Di Tambahkan ...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('delete'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:-2.5%;">
        Berita Berjudul <strong>{{session('delete')}}</strong> Di Hapus ...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('edit'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left:-2.5%;">
        Berita Berjudul <strong>{{session('edit')}}</strong> Berhasil Di Edit ...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="table-responsive col-lg-8">
        <a href="/dashboard/post/create" class="btn btn-primary mb-3">Buat Berita +</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($models as $data)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$data->title}}</td>
              <td>{{$data->category->nama}}</td>
              <td>
                <a href="/dashboard/post/{{$data->slug}}" class="badge bg-info">
                  <span data-feather="eye"></span>
                </a>
                <a href="/dashboard/post/{{$data->slug}}/edit" class="badge bg-warning">
                  <span data-feather="edit"></span>
                </a>
                <form action="/dashboard/post/{{$data->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus ?')">
                  <span data-feather="x-circle"></span>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
@endsection