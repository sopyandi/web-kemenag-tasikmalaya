<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
   public function dashboard()
   {
      $data['berita'] = Post::count();
      $data['user'] = User::count();
      $data['berita_saya'] = Post::where('user_id',auth()->id())->count();
      return view('dashboard/dashboard')->with($data);
   }
}
