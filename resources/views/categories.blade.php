@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        @foreach($category as $data)
        <div class="col-md-4 mb-4">
            <a href="/blog?category={{$data->slug}}">
                <div class="card text-bg-white">
                    <img src="https://picsum.photos/500/300?{{$data->nama}}" class="card-img" alt="...">
                    <!-- <img src="img/anwar.JPG" class="card-img" alt="..."> -->
                    <div class="card-img-overlay" id="category">
                        <h3 class="card-title text-white" style="margin-top:40%;">{{$data->nama}}</h3>
                    </div>
                </div>
            </a>
        </div>
        @endforeach()
    </div>
</div>
@endsection()
<style>
    #category {
        display: none;
        transition: .9s ease;
        text-align: center;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .card:hover #category {
        transition: .9s ease;
        display: block;
    }

    .card:hover {
        transition: .9s ease;
        margin-top: -4%;
        /* margin-left:-4%; */
        margin-left: -4%;
        z-index: 100;
    }

    .card {
        transition: .9s ease;
    }
</style>