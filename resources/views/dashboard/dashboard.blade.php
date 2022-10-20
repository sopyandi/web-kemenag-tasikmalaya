@extends('dashboard/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang {{Auth()->user()->name}}</h1>
      </div>
      <div class="conatainer mt-5">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h1>{{ $berita }}</h1>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                 <h1>{{ $user  }}</h1>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h1>{{ $berita_saya }}</h1>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection