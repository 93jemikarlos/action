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


//query insert data ke dalam database
$query = "INSERT INTO tbl_karyawan 
(nik_karyawan, nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir,status_perkawinan, nomor_ktp, nomor_buku_anggota, nomor_npwp, suku, agama, alamat_sekarang, alamat_ktp, nomor_bpjs_kesehatan, nomor_bpjs_ketenagakerjaan) 

VALUES ('$nik_karyawan', '$nama_lengkap', '$nama_panggilan', '$tempat_lahir', '$tanggal_lahir', '$status_perkawinan', '$nomor_ktp', '$nomor_buku_anggota', '$nomor_npwp', '$suku', '$agama', '$alamat_sekarang', '$alamat_ktp', '$nomor_bpjs_kesehatan', '$nomor_bpjs_ketenagakerjaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) 


{

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>