<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function shortby_user(User $author)
    {
        return view('/blog', [
           'judul'=>'Short By Nama : '.$author->name,
           'title'=>'Short By Username',
           'models'=>$author->Posting->load(['author','category'])

        ]);
    }
}
