<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function login()
    {
        return view('register/login', [
            'title' => 'Login'
        ]);
    }
    public function register()
    {
        return view('/dashboard/post/register', [
            'title' => 'Login',
            'models'=>Category::all()
        ]);
    }
    ///method login
    public function data_login(Request $data)
    {
        //    return $data->all();
        $datalogin = $data->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        //    $datalogin['password'] = bcrypt($datalogin['password']);
        if (Auth::attempt($datalogin)) {
            $data->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('filedlogin', 'Maap Anda Gagal Login Mungkin Ada Kesalahan Dalam Pengetikan Atau Anda Belum Terdaftar!!');
    }

    ///method logout
    public function logout(Request $logout)
    {
        Auth::logout();

        $logout->session()->invalidate();

        $logout->session()->regenerateToken();

        return redirect('/login');
    }


    //method validasi   
    public function data_register(Request $data)
    {
        //filterasi data untuk register
        // return $data->all();
        // return $data;    
        $datavalidasi = $data->validate([
            'name' => 'required|min:10|max:225',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:225'
        ]);
        $datavalidasi['password'] = bcrypt($datavalidasi['password']);
        $datavalidasi['category_id'] = $data->agama;
        $datavalidasi['status'] = $data->status;
        // $datavalidasi['password'] = Hash::make($datavalidasi['password'])
        //masukan data ke databases
        User::create($datavalidasi);
        // dd('daftar berhasil');
        //redirect
        $data->session()->flash('success', $datavalidasi['username']);
        return redirect('/login');
    }
}
