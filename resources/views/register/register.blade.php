@extends('layouts/main')
@section('container')
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-4 mt-3">
    <main class="form-signin w-100 m-auto">
        <center>
            <img class="mb-4" src="img/logo.png" alt="" width="250" height="110">
        </center>
        <h1 class="h3 mb-3 fw-normal">Registrasi</h1>
        <form action="/register" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name"  value="{{old('name')}}">
                <label for=" floatingInput">Name</label>
                @error('name')
                <div  class="invalid-feedback">
                {{$message}}
                </div>  
                @enderror 
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username"  value="{{old('username')}}">
                <label for=" floatingInput">Username</label>
                @error('username')
                <div  class="invalid-feedback">
                {{$message}}
                </div>  
                @enderror 
            </div>
            <!-- <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{old('username')}}">
                <label for="floatingInput">Username</lable>
                
                <div  class="invalid-feedback">
                salah mang tingali atuh
                </div> 
                
            </div> -->
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{old('email')}}">
                <label for="floatingInput">Email Adress</label>
                @error('email')
                <div  class="invalid-feedback">
                {{$message}}
                </div>  
                @enderror           
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div  class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
        </form>
        <br>
        <center>
            <small class="justify-content-center">
                <p>
                    Jika Sudah Memiliki Acount Kemenag <br>
                    Bisa Login <a href="/login"> Disini ...</a>
                </p>
            </small>
    </main>
</div>
    </div>
</div>
@endsection