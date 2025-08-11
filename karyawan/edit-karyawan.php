<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_karyawan WHERE id_karyawan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Karyawan</title>
  </head>

  <body background="upload/3.jpg">

    <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <B> EDIT DATA KARYAWAN </B>
            </div>
            <div class="card-body">
              <form action="update-karyawan.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>NIK Karyawan</label>
                  <input type="text" name="nik_karyawan" value="<?php echo $row['nik_karyawan'] ?>" required placeholder="Masukkan NIK Karyawan" class="form-control">
                </div>
          

                <div class="form-group">
                <input type="hidden" name="id_karyawan" value="<?php echo $row['id_karyawan'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" required placeholder="Masukkan Nama Karyawan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Panggilan</label>
                  <input type="text" name="nama_panggilan" value="<?php echo $row['nama_panggilan'] ?>" required placeholder="Masukkan Nama Panggilan" class="form-control">
                </div>

              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>" required placeholder="Masukkan Tempat Lahir" class="form-control">
                </div>

                  <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'] ?>" required placeholder="Masukkan Tanggal Lahir" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Status Perkawinan</label>
                  <input type="text" name="status_perkawinan" value="<?php echo $row['status_perkawinan'] ?>" required placeholder="Masukkan Status Perkawinan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor KTP</label>
                  <input type="text" name="nomor_ktp" value="<?php echo $row['nomor_ktp'] ?>" required placeholder="Masukkan Nomor KTP" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor Buku Anggota</label>
                  <input type="text" name="nomor_buku_anggota" value="<?php echo $row['nomor_buku_anggota'] ?>" required placeholder="Masukkan Nomor Buku Anggota" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Nomor NPWP</label>
                  <input type="text" name="nomor_npwp" value="<?php echo $row['nomor_npwp'] ?>" required placeholder="Masukkan Nomor NPWP" class="form-control">
                </div>

                <div class="form-group">
                  <label>Suku</label>
                  <input type="text" name="suku" value="<?php echo $row['suku'] ?>" required placeholder="Masukkan Suku" class="form-control">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="agama" value="<?php echo $row['agama'] ?>" required placeholder="Masukkan Agama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_sekarang" required placeholder="Masukkan Alamat Karyawan" rows="4"><?php echo $row['alamat_sekarang'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Alamat KTP</label>
                  <textarea class="form-control" name="alamat_ktp" required placeholder="Masukkan Alamat KTP" rows="4"><?php echo $row['alamat_ktp'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Nomor BPJS Kesehatan</label>
                  <input type="text" name="nomor_bpjs_kesehatan" value="<?php echo $row['nomor_bpjs_kesehatan'] ?>" required placeholder="Masukkan Nomor BPJS Kesehatan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor BPJS Ketenagakerjaan</label>
                  <input type="text" name="nomor_bpjs_ketenagakerjaan" value="<?php echo $row['nomor_bpjs_ketenagakerjaan'] ?>" required placeholder="Masukkan Nomor BPJS Ketenagakerjaan" class="form-control">
                </div>

                
               <button type="submit" class="btn btn-success" name="submit">UPDATE</button>
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