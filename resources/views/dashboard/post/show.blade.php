@extends('dashboard/layouts/main')
@section('container')
<div class="continer mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <img src="https://picsum.photos/1300/500?{{$models->category->nama}}" alt="" class="img-fluid my-4 ">
            <h2 class="mb-3">{{$models->title}}</h2>
            {!!$models->body!!}
            <br><br>
            <a href="/blog">>>Kembali Ke Halaman Sebelumnya<<< /a>
        </div>
    </div>
</div>
@endsection
