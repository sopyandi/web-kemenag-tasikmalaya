<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
       return view('/dashboard/post/post',[
        'models'=>Post::where('user_id', auth()->user()->id)->get()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/dashboard/post/create',[
        'models' =>Category::all()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('img')->store('post-images');
        // ddd($request);
        $validasi = $request->validate([
        'title'=>'required|max:225',
        'slug'=>'required|unique:Posts',
        'category_id'=>'required',
        'img'=>'image|file|max:1024',
        'body'=>'required'
        ]);
        if($request->file('img')){
        $validasi['img'] = $request->file('img')->store('post-images');
        }
        $validasi['user_id']= auth()->user()->id;
        $validasi['exerp']= Str::limit(strip_tags($request->body),200);
        Post::create($validasi);
        $username = auth()->user()->name;
        $judul = $request->title;
        $request->session()->flash('success', $username);
        $request->session()->flash('judul', $judul);
        return redirect('/dashboard/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('/dashboard/post/show',[
        'models' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('/dashboard/post/edit',[
            'berita' =>$post,
            'models' =>Category::all()
           ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $ruls = [
            'title'=>'required|max:225',
            'category_id'=>'required',
            'body'=>'required'
            ];

        if($request->slug != $post->slug){
            $ruls['slug'] = 'required|unique:Posts';
        }

        $edit = $request->validate($ruls);

        $edit['user_id']= auth()->user()->id;
        $edit['exerp']= Str::limit(strip_tags($request->body),200);
        $edit['img']=1;
        
        Post::where('id',$post->id)->update($edit);
        $judul = $request->title;
        return redirect('/dashboard/post')->with('edit', $judul);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    // $rian = auth()->user()->name;
    // return $post;
    $judul = $post->title;
    Post::destroy($post->id);
    return redirect('/dashboard/post')->with('delete',$judul);

    }
}
