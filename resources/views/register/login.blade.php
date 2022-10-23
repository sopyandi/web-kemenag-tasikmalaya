@extends('layouts/main')
@section('container')
<div class="container-fluid">
<div class="row justify-content-center">
<!-- session sesudah registrasi -->
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left:-2.5%;">
  <strong>welcome {{session('success')}}!!</strong> Your Acount Is Ready For Login .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!--  -->
<!-- session saat gagal login -->
@if(session()->has('filedlogin'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:-2.5%;">
  <strong>Warning!!!</strong>{{session('filedlogin')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!--  -->
    <div class="col-md-4 mt-3">
        <main class="form-signin w-100 m-auto">
            <center>
                <img class="mb-4" src="img/logo.png" alt="" width="250" height="110">
                </center>
            <h1 class="h3 mb-1 fw-normal">Halaman Login Hanaya Untuk Pegawai Kantor Saja</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
            </form>
            <br>
            <center>    
             <small class="justify-content-center">
                <p>
                    Jika Belum Punya Acount Kemenag <br>
                    Bisa Registrasi <a href="/register"> Disini ...</a>
                </p>
            </small>
        </main>
    </div>
</div>
</div>
@endsection