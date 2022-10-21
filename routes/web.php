<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SlugController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DashboardPostController;

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
Route::get('/abouts', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'blog']);
//routs untuk single blog di halaman blog
Route::get('blog/{post:slug}', [PostController::class, 'singgle']);
//routs untuk category
Route::get('categories', [CategoryController::class, 'data_category']);
//login
Route::get('/login', [RegisterController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [RegisterController::class, 'data_login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
//logout
Route::post('/logout', [RegisterController::class, 'logout'])->middleware('auth');
//register
Route::post('/register', [RegisterController::class, 'data_register']);
Route::get('/register', [RegisterController::class, 'register']);
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
//route untuk tulis otomats slug
Route::get('/slugable',[SlugController::class, 'slugable'])->middleware('auth');
Route::get('/pengajuans',[PengajuanController::class,'pengajuan']);
Route::get('/pengajuan/pengaduan',[PengajuanController::class,'pengaduan']);
Route::post('/pengajuan/pengaduan',[PengajuanController::class,'input_pengaduan']);
// routs untuk view categories
// Route::get('/categories/{category:slug}', [CategoryController::class, 'categori']);
//Short By Blog From Publisher (username/nama)
// Route::get('/shortby_nama/{author:username}', [UserController::class, 'shortby_user']);
