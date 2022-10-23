@extends('/layouts/main')
@section('container')
<center>
    {{-- <img src="pengajuan/yatim1.jpg" alt="" style="width:100%; height:500px;"> --}}
<div class="container">
     @if(session()->has('success'))
    <div class="alert alert-light alert-dismissible fade show " role="alert" style="margin-left:-2.5%;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/pengajuan/berhasil.gif" alt="" style="width:40%;">
                </div>
            </div>
            <div class="row">
                <div class="col">
               Yth. <strong>{{session('success')}}!!</strong> Kami Akan Menanggapi Pengaduan Anda Dalam 1x24 jam .
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
      </div>
      @endif 
    <div class="row row-cols-3 mt-5 mb-5 d-inline-flex">
        <div class="col">
            <a href="/pengajuan/pengaduan">
            <img src="pengajuan/pengajuan.png" alt="" >
        </a>
        </div>
        <div class="col">
            <a href="">
            <img src="pengajuan/bantuan.png" alt="" style="border-radus:50%;">
            </a>
        </div>
        <div class="col">
            <a href="">
            <img src="pengajuan/donasi.png" alt="">
            </a>
        </div>
        <div class="col">
            <h2>Ajukan Pengaduan</h2>
        </div>
        <div class="col">
            <h2>Ajukan Sumbangan</h2>
        </div>
        <div class="col">
            <h2>Donaskan Dana</h2>
        </div>
    </div>
    </div>
</div> 
</center>
<br><br><br><br><br>
<div class="container">
    {{-- <h6>Kantor kementeran agama kabupaten tasikmalaya siap melayan dengan senang hati</h6> --}}
</div>
@endsection
<style>
    h2{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .box{
        transition: .9s ease;
        display:none;
        background-color:yellow;
        border-radius:20%;
    }
    a:hover img{
        transition: .9s ease;
        width:58%;
    }
    a:hover .box{
        transition: .9s ease;
        display:block;
    }
    img{
        transition: .9s ease;
        width:50%;
    }
</style>