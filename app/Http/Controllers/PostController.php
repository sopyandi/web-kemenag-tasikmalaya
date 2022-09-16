<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('home',[
            "title"=>"Home"
            ]);
    }
    public function about()
    {
        return view('about' ,[
            "title"=>"About",
            "name"=>"Rian Sopyandi",
            "gmail"=>"sopyandirian12@gmail.com",
            "img"=>"anwar.jpg"
        
            ]);
    }
    public function blog()
    {
        return view('blog', [
            "judul"=>"Halaman Blog Post",
            "title"=>"Blog",
            // "blog" => Post::all()
            "models" =>Post::latest()->Filter(request(['search']))->get()
            
        ]);
    }
    public function singgle(Post $post)
    {
        return view('single',[
            "title" => "Single Blog",
            "models" => $post
         ]);
    }
}
