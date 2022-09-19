@extends('layouts/main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4 mt-3">
        <main class="form-signin w-100 m-auto">
            <center>
                <img class="mb-4" src="img/logo.png" alt="" width="250" height="110">
                </center>
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
            </form>
        </main>
    </div>
</div>
@endsection