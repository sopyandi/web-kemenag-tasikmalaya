@extends('layouts/main')

@section('container')
<h1>Halaman About</h1>
<h3>{{$name}}</h3>
 <p>{{$gmail}}</p>
 <img src="img/{{$img}}" alt="{{$name}}" style="width:200px;" class="img-thubnail rounded-circle">

@endsection