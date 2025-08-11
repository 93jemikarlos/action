<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_karyawan                = $_POST['id_karyawan'];
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

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_karyawan SET nik_karyawan='$nik_karyawan', nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', status_perkawinan='$status_perkawinan', nomor_ktp='$nomor_ktp', nomor_buku_anggota='$nomor_buku_anggota', nomor_npwp='$nomor_npwp', suku='$suku', agama='$agama', alamat_sekarang='$alamat_sekarang', alamat_ktp='$alamat_ktp', nomor_bpjs_kesehatan='$nomor_bpjs_kesehatan', nomor_bpjs_ketenagakerjaan='$nomor_bpjs_ketenagakerjaan' WHERE id_karyawan = '$id_karyawan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
   echo "<script>alert('Data berhasil diubah!'); window.location.href='index.php';</script>";
} else {
   echo "<script>alert('Gagal mengubah data!'); window.location.href='index.php';</script>";
}

?>