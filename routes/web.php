<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'blog']);

// routs untuk single blog di halaman blog
Route::get('blog/{post:slug}', [PostController::class, 'singgle']);
//routs untuk category
Route::get('categories', [CategoryController::class, 'data_category']);
// routs untuk view categories
Route::get('/categories/{category:slug}', [CategoryController::class, 'categori']);
//Short By Blog From Publisher (username/nama)
Route::get('/shortby_nama/{author:username}',[UserController::class, 'shortby_user']);