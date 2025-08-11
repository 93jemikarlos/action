<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik_karyawan               = $_POST['nik_karyawan'];
$nama_lengkap               = $_POST['nama_lengkap'];
$nama_panggilan             = $_POST['nama_panggilan'];
$tempat_lahir               = $_POST['tempat_lahir'];
$tanggal_lahir              = $_POST['tanggal_lahir'];
$status_perkawinan          = $_POST['status_perkawinan'];
$nomor_ktp                  = $_POST['nomor_ktp'];
$nomor_buku_anggota         = $_POST['nomor_buku_anggota'];
$nomor_npwp                 = $_POST['nomor_npwp'];
$suku                       = $_POST['suku'];
$agama                      = $_POST['agama'];
$alamat_sekarang            = $_POST['alamat_sekarang'];
$alamat_ktp                 = $_POST['alamat_ktp'];
$nomor_bpjs_kesehatan       = $_POST['nomor_bpjs_kesehatan'];
$nomor_bpjs_ketenagakerjaan = $_POST['nomor_bpjs_ketenagakerjaan'];
        
  if (isset($_POST['submit'])) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);

       
//query insert data ke dalam database
$sql = "INSERT INTO tbl_karyawan 
(nik_karyawan, nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir,status_perkawinan, nomor_ktp, nomor_buku_anggota, nomor_npwp, suku, agama, alamat_sekarang, alamat_ktp, nomor_bpjs_kesehatan, nomor_bpjs_ketenagakerjaan, image) 

VALUES ('$nik_karyawan', '$nama_lengkap', '$nama_panggilan', '$tempat_lahir', '$tanggal_lahir', '$status_perkawinan', '$nomor_ktp', '$nomor_buku_anggota', '$nomor_npwp', '$suku', '$agama', '$alamat_sekarang', '$alamat_ktp', '$nomor_bpjs_kesehatan', '$nomor_bpjs_ketenagakerjaan', '$image')";

if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && $connection->query($sql)) {
    
    echo "<script>alert('Data berhasil ditambah!'); window.location.href='index.php';</script>";
    
        } else {
            echo "Gagal menyimpan data!";
        }
    } else {
        echo "Gagal mengunggah foto. Periksa kembali file!";
    }
} else {
    echo "Form tidak di-submit dengan benar.";
}
?>

