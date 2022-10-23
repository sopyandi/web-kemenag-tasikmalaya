<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function pengajuan()
    {
        return view('/pengajuan/pengajuan',[
        'title'=>'Pengajuan'
        ]);
    }
    public function pengaduan()
    {
        return view('/pengajuan/penanganan/pengaduan',[
        'title'=>'Pengajuan',
        'models' =>Category::all()
        ]);
    }
    public function input_pengaduan(Request $data)
    {
        // return $data;
        Pengaduan::create([
        'nama'=>$data->nama,
        'category_id'=>$data->agama,
        'alamat'=>$data->alamat,
        'nomor'=>$data->nomor,
        'pengaduan'=>$data->pengaduan
        ]);
        $nama = $data->nama;
        $data->session()->flash('success', $nama);
        return redirect('/pengajuans');
    }
}
