@extends('layouts/main')

@section('container')
<div class="continer mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-8">
        @if($models->img)
          <div style="max-height:350px; overflow:hidden;">
              <img src="{{ asset('storage/'. $models->img) }}" alt="" style="width:100%;">
          </div>
        @else
        <img src="https://picsum.photos/1300/500?{{$models->category->nama}}" alt="" class="img-fluid my-4 ">
        @endif
            <h2 class="mb-3">{{$models->title}}</h2>
            <p>Publiser <a href="">{{$models->author->name}}</a>
                Category <a href="/blog?category={{$models->category->slug}}">{{$models->category->nama}}</a></p>
            {!!$models->body!!}
            <br><br>
            <a href="/blog">>>Kembali Ke Halaman Sebelumnya<<< /a>
        </div>
    </div>
</div>
@endsection

<!-- <html>   
Post::create([
    'title' => 'Judul ke tiga',
    'category_id' => 3,
    'slug'  => 'judul-ketiga',
    'exerp' => 'Judul Pertama Adalah Judu Pertama',
    'body'  => 'saya adalah rian sopyandi 3'
    ])
</html> -->
<!-- <style>
.single{
    margin-left:30%;
    width:50%;
}
</style> -->