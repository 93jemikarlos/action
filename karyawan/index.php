<!doctype html>
<html lang="en">
<style>
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #575757;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
<nav>
    <a href="index.php">Beranda</a>
     <a href="grafik.php" target="_blank">Lihat Grafik Karyawan</a>
    
</nav>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Karyawan KSP CU SMG</title>
  </head>

<script type="text/javascript">
        function deleteconfig(){
        var tujuan=$(this).attr('id');
        var hapusin=confirm("Apakah Anda yakin ingin menghapus data ini?");
        if(hapusin==true){
            window.location.href=tujuan;
            }
            return hapusin;
            }
        </script>

<script type="text/javascript">
        function editconfig(){
        var tujuan=$(this).attr('id');
        var hapusin=confirm("Apakah Anda yakin ingin mengubah data ini?");
        if(hapusin==true){
            window.location.href=tujuan;
            }
            return hapusin;
            }
        </script>


  <body background="upload/3.jpg">

    <div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-70">
          <div class="card">
            <div class="card-header">
              <b><marquee>DATA KARYAWAN KSP CREDIT UNION SEMARONG</marquee></b>
            </div>
            <div class="card-body">
              <a href="tambah-karyawan.php" class="btn btn-md btn-success" style="margin-bottom: 30px">TAMBAH DATA</a>
              <a target="_blank" href="export-excel.php" class="btn btn-md btn-warning" style="margin-bottom: 30px">EXPORT KE EXCEL</a>

              <table class="table table-bordered" id="myTable">
                <thead >
                  <tr >
                    <th scope="col">NO.</th>
                    <th scope="col">NO. INDUK KARYAWAN</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">NAMA PANGGILAN</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_karyawan");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td ><?php echo $no++ ?></td>
                      <td><?php echo $row['nomor_induk_karyawan'] ?></td>
                      <td><?php echo $row['nama_lengkap'] ?></td>
                      <td><?php echo $row['nama_panggilan'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td>
<a href="foto.php?id=<?php echo $row['id_karyawan'] ?>" target="_blank" class="btn btn-sm btn-primary">DETAIL</a>
<a href="edit-karyawan.php?id=<?php echo $row['id_karyawan'] ?>" onclick="return editconfig()" class="btn btn-sm btn-primary" >EDIT</a>
<a href="hapus-karyawan.php?id=<?php echo $row['id_karyawan'] ?>" onclick="return deleteconfig()" class="btn btn-sm btn-primary" >HAPUS</a>
  </td>
  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
  <p align="center">© 2024 All Rights Reserved - KSP CU SMG.</p>
</html>