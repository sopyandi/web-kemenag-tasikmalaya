<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }
    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Rian Sopyandi",
            "gmail" => "sopyandirian12@gmail.com",
            "img" => "anwar.jpg"

        ]);
    }
    public function blog()
    {
        //jika ingin mengakali nama all post
        // $title = '';
        // if (request('apa aja')) {
        //     $category = Category::firstWhere('slug', request('apa aja'));
        //     $title = 'in' . $apa aja;
        // }
        return view('blog', [
            "judul" => "Halaman Blog Post",
            "title" => "Blog",
            // "blog" => Post::all()
            "models" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()

        ]);
    }
    public function singgle(Post $post)
    {
        return view('single', [
            "title" => "Single Blog",
            "models" => $post
        ]);
    }
}
