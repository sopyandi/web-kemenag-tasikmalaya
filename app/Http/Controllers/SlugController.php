<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class SlugController extends Controller
{
    public function checkSlug(Request $request)
    {
     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
     return response()->json(['slug'=>$slug]);
    }
    public function pp(){
        return view('/dashboard/post/post');
    }
}
