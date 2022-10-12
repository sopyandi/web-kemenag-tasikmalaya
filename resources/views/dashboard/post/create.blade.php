@extends('dashboard/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post</h1>
      </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/post">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title"  name="title">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">slug</label>
        <input type="text" class="form-control" id="slug"  name="slug">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<a href="/bangsat">xccsds</a>

<script>
    //untuk membuat slug otomatis dengan javascript
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function (){
     fetch('/bangsat?title=' + title.value)
     .then(response => response.json())
     .then(data => slug.value = data.slug)
    });
</script>
@endsection