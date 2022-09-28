@extends('layouts/main')
@section('container')
<!-- <h1>{{$judul}}</h1> -->
<br><br>
<div class="row justify-content-center">
  <div class="col-md-6 mb-4">
    <form action="/blog">
      @if(request('category'))
      <input type="hidden" name="ctegory" value="{{request('category')}}">
      @endif
      @if(request('author'))
      <input type="hidden" name="author" value="{{request('author')}}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('query')}}">
        <button class="btn btn-success" type="submit" name="">Search</button>
      </div>
    </form>
  </div>
</div>
@if($models -> count())
<div class="card mb-3" style="width:90%; margin-left:5%;">
  <!-- <img src="https://picsum.photos/1300/500?{{$models[0]->category->nama}}"class="card-img-top" alt="{{$models[0]->category->nama}}"> -->
  <img src="foto-berita/{{$models[0]->img}}.jpg" alt="">
  <div class="card-body">
    <h3 class="card-title">{{$models[0]->title}}</h3>
    <p>By . <a href="/blog?author={{$models[0]->author->username}}">{{$models[0]->author->name}}</a>
      Thiss <a href="/blog?category={{$models[0]->category->slug}}"> {{$models[0]->category->nama}}</a>
      <small class="text-muted">
        {{$models[0]->created_at->diffForHumans()}}
    </p>
    </small>
    <p>{{$models[0]->exerp}}</p>
    <a href="/blog/{{$models[0]->slug}}" class="btn btn-primary">Read More...</a>
  </div>
</div>
<br>

<div class="container">
  <div class="row">
    @foreach($models->skip(1) as $data)
    <div class="col-md-4 mb-4">
      <div class="card" style="height:450px;">
        <div class="position-absolute" id="category">
          {{$data->category->nama}}
        </div>
        <!-- <img src="https://picsum.photos/500/300?{{$data->category->nama}}" class="card-img-top" alt="{{$data->category->nama}}"> -->
        <img src="foto-berita/{{$data->img}}.jpg" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$data->title}}</h5>
          <small class="text-muted">
            <p> By <a href="/blog?author={{$data->author->username}}">{{$data->author->name}}</a> <br>
              In category <a href="/blog?category={{$data->category->slug}}">{{$data->category->nama}}</a></p>
            <p class="card-text">{{$data->exerp}}</p>
          </small>
          <a href="/blog/{{$data->slug}}" class="btn btn-primary" style="float:-right;">Read More..</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row justify-content-center">
    <div class="paginate">
      <center>{{$models->links()}}</center>
    </div>
  </div>
</div>
@else
<p class="text-center fs-4">No Post Found</p>
@endif
<!-- @foreach($models->skip(1) as $isi_blog )
<article class="mb-5 border-bottom pb-3">
<a href="/blog/{{$isi_blog->slug}}"><h3>{{$isi_blog->title}}</h3></a>
<p>By . <a href="/shortby_nama/{{$isi_blog->author->username}}">{{$isi_blog->author->name}}</a> Thiss <a href="/categories/{{$isi_blog->category->slug}}">  {{$isi_blog->category->nama}}</a></p>
<p>{{$isi_blog->exerp}}</p>
<a href="/blog/{{$isi_blog->slug}}">Read More...</a>
<br>
</article>
@endforeach -->
@endsection
<style>
  #category {
    border-radius: 5px 0px 15px 0px;
    color: white;
    height: 30px;
    width: 150px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.7);
  }
</style>