<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
   public function categori(Category $category)
   {
    return view('blog', [
        'judul'=>'Short By Category :'.$category->nama,
        'title' => $category->nama,
        'models'  => $category->Post->load(['author','category'])
    ]);
   }
   public function data_category()
   {
    return view('categories',[
        'title' => 'List Data Category',
        'category' => Category::all()
    ]);
   }
}
