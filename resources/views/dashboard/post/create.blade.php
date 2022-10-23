@extends('dashboard/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post</h1>
      </div>
<div class="col-lg-8">
<form method="post" action="/dashboard/post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{@old('title')}}">
        @error('title')
        <div  class="invalid-feedback">
        {{$message}}
        </div>  
        @enderror 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{@old('slug')}}" disable readonly>
        @error('slug')
        <div  class="invalid-feedback">
        {{$message}}
        </div>  
        @enderror 
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category_id" class="form-select" aria-label="Default select example">
        @foreach($models as $data)
        @if(old('category_id') == $data->id)
        <option value="{{ $data->id }}" selected >{{$data->nama}}</option>
        @else
        <option value="{{ $data->id }}">{{$data->nama}}</option>
        @endif
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="img" class="form-label @error('img') is-invalid @enderror">Tambahkan Gambar</label>
        <input class="form-control" type="file" id="img"  name="img">
        @error('img')
        <div  class="invalid-feedback">
        {{$message}}
        </div>  
        @enderror
      </div>
    <div class="mb-3">
        <label for="body" class="form-label" required>Deskripsi</label>
        <input id="body" type="hidden" name="body" value="{{old('body')}}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <div  class="invalid-feedback">
        {{$message}}
        </div>  
        @enderror  
    </div>
    <button type="submit" class="btn btn-primary">Buat Berita</button>
</form>
</div>
<script>    
    //untuk membuat slug otomatis dengan javascript
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function (){
     fetch('/slugable?title=' + title.value)
     .then(response => response.json())
     .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

</script>
@endsection