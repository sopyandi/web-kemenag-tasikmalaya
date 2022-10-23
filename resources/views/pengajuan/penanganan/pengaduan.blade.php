<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <img src="/pengajuan/nav.png" alt="" style="width:100%;">
    <div class="container mt-5">
        <div class="row">
          <div class="col">
            <p>Harap mengisi data dengan lengkap dan benar. Pengaduan dengan data yang tidak lengkap tidak akan diproses.
              Bila perlu, silakan lampirkan bukti-bukti yang ada dalam satu file dengan format PDF..</p>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/pengajuan/pengaduan" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Pengadu</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
                    </div>
                    <div class="mb-3">
                      <select class="form-select" aria-label="Default select example" name="agama">
                        @foreach($models as $data)
                        <option value="{{$data->id}}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required></textarea>
                      <label for="floatingTextarea2">Alamat</label>
                    </div><br>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nomer Hand Phone Yang Bisa Di Hubungi</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="nomor" required>
                    </div><br>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 140px" name="pengaduan" required></textarea>
                        <label for="floatingTextarea2">Pengaduan</label>
                      </div><br>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a href="/pengajuans" style="text-decoration:none;float:right;">kembali Ke Halaman Sebelumnya</a>

                  </form>
                  <br>
                  <br><br>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<style>
    .box{
        height:90px;
    }
</style>