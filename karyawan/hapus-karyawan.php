<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_karyawan WHERE id_karyawan = '$id'";

if($connection->query($query)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='index.php';</script>";
} else {
   echo "<script>alert('Gagal menghapus data!'); window.location.href='index.php';</script>";
}

?>