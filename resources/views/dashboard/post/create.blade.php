@extends('dashboard/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post</h1>
      </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/post">
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">slug</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    //untuk membuat slug otomatis dengan javascript
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',functon (){
     fetch('/dashboard/post/checkSlug')
     .then(response => response.json())
     .then(data => slug.value = data.slug)
    });
</script>
@endsection