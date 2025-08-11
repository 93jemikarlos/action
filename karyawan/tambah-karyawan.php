<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Karyawan</title>
  </head>

  <body background="upload/3.jpg">

    <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <B> TAMBAH DATA KARYAWAN </B>
            </div>
            <div class="card-body">
              <form action="simpan-karyawan.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>NIK Karyawan</label>
                  <input type="text" name="nik_karyawan"  required placeholder="Masukkan NIK Karyawan" class="form-control" >
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" required placeholder="Masukkan Nama Karyawan" class="form-control">
                </div>

                 <div class="form-group">
                  <label>Nama Panggilan</label>
                  <input type="text" name="nama_panggilan" required placeholder="Masukkan Nama Panggilan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" required placeholder="Masukkan Tanggal Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <input type="text" name="status_perkawinan" required placeholder="Masukkan Status Perkawinan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor KTP</label>
                  <input type="text" name="nomor_ktp" required placeholder="Masukkan Nomor KTP" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor Buku Anggota</label>
                  <input type="text" name="nomor_buku_anggota" required placeholder="Masukkan Nomor Buku Anggota" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor NPWP</label>
                  <input type="text" name="nomor_npwp" required placeholder="Masukkan Nomor NPWP" class="form-control">
                </div>

                <div class="form-group">
                  <label>Suku</label>
                  <input type="text" name="suku" required placeholder="Masukkan Suku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="agama" required placeholder="Masukkan Agama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat Sekarang</label>
                  <textarea class="form-control" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" rows="4"> 
                  </textarea>
                </div>
                
                <div class="form-group">
                  <label>Alamat KTP</label>
                  <textarea class="form-control" name="alamat_ktp" required placeholder="Masukkan Alamat KTP" rows="4"> 
                  </textarea>
                </div>

                <div class="form-group">
                  <label>Nomor BPJS Kesehatan</label>
                  <input type="text" name="nomor_bpjs_kesehatan" required placeholder="Masukkan Nomor BPJS Kesehatan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor BPJS Ketenagakerjaan</label>
                  <input type="text" name="nomor_bpjs_ketenagakerjaan" required placeholder="Masukkan Nomor BPJS Ketenagakerjaan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Foto Karyawan</label>
                  <input type="file" name="image" required placeholder="Masukkan Foto" class="form-control">
                  <p style="color: red">Ekstensi yang diperbolehkan .jpg | .jpeg</p>
                </div>
                

                <button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php" class="btn btn-success">Kembali</a>
                


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>