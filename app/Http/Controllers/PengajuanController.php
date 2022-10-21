<?php

namespace App\Http\Controllers;

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
        'title'=>'Pengajuan'
        ]);
    }
    public function input_pengaduan(Request $data)
    {
        // return $data;
        Pengaduan::create([
        'nama'=>$data->nama,
        'nomor'=>$data->nomor,
        'pengaduan'=>$data->pengaduan
        ]);
    }
}
