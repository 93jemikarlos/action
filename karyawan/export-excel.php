<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Karyawan.xls");
	?>
 
	
 
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIK KARYAWAN</th>
			<th>NAMA LENGKAP</th>
			<th>NAMA PANGGILAN</th>
			<th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>STATUS PERKAWINAN</th>
            <th>NOMOR KTP</th>
            <th>NOMOR BUKU ANGGOTA</th>
            <th>NOMOR NPWP</th>
            <th>SUKU</th>
            <th>AGAMA</th>
            <th>ALAMAT SEKARANG</th>
            <th>ALAMAT KTP</th>
            <th>NOMOR BPJS KESEHATAN</th>
            <th>NOMOR BPJS KETENAGAKERJAAN</th>	
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_karyawan");
 
		// menampilkan data karyawan
		$data = mysqli_query($koneksi,"select * from tbl_karyawan");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nik_karyawan']; ?></td>
			<td><?php echo $d['nama_lengkap']; ?></td>
			<td><?php echo $d['nama_panggilan']; ?></td>
			<td><?php echo $d['tempat_lahir']; ?></td>
			<td><?php echo $d['tanggal_lahir']; ?></td>
			<td><?php echo $d['status_perkawinan']; ?></td>
			<td><?php echo $d['nomor_ktp']; ?></td>
			<td><?php echo $d['nomor_buku_anggota']; ?></td>
			<td><?php echo $d['nomor_npwp']; ?></td>
			<td><?php echo $d['suku']; ?></td>
			<td><?php echo $d['agama']; ?></td>
			<td><?php echo $d['alamat_sekarang']; ?></td>
			<td><?php echo $d['alamat_ktp']; ?></td>
			<td><?php echo $d['nomor_bpjs_kesehatan']; ?></td>
			<td><?php echo $d['nomor_bpjs_ketenagakerjaan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>