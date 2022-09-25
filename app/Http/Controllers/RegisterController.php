<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
        return view('register/register', [
            'title' => 'Login'
        ]);
    }
    //method validasi   
    public function data_register(Request $data)
    {
        //filterasi data untuk register
        // return $data->all();
        $datavalidasi = $data->validate([
            'name' => 'required|max:225',
            'username' => ['required', 'min:3', 'max:225', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:225'
        ]);
        $datavalidasi['password'] = bcrypt($datavalidasi['password']);
        // $datavalidasi['password'] = Hash::make($datavalidasi['password'])
        //masukan data ke databases
        User::create($datavalidasi);
        // dd('daftar berhasil');
        //redirect
        return redirect('/login');
    }
}
