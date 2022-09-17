@extends('layouts/main')

@section('container')
<div class="continer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="https://picsum.photos/1300/500?{{$models->category->nama}}" alt="" class="img-fluid mb-4">
            <h2 class="mb-3">{{$models->title}}</h2>
            <p>By . Rian <a href="">{{$models->author->name}}</a>
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