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
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email Adress</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Register">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
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