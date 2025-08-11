<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_karyawan WHERE id_karyawan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Informasi Lengkap Karyawan </title>
	
	
	<style type="text/css">
	body{
	font-family: monospace;
	font-size: 13pt;
}
 
th{
	text-align: left;
}
 
img{
	width: 100%;
	margin-bottom: 10px;
}
 
.kotak{
	border: 2px solid black;
	width: 60%;
	margin: 10px auto;
	padding: 20px;
}
 
.judul{
	text-align: center;
        background: white;
}
 
.blok{
	overflow: hidden;
}
 
.kiri{
	width: 20%;
	
	float: left;
}
 
.kanan{
	width: 60%;
	padding:0px 30px;	
	float: left;
}
 
@media only screen and (max-width: 768px) {
	.kotak{
		width: 100%;
		padding: 0px;
		border: none;
	}
	
	.kiri{
		width: 100%;
	}
 
	.kanan{
		width: 100%;
		padding: 0;
	}
}	

	</style>

</head>

<body background="upload/3.jpg">

	<div class="kotak">
 
		
			<h2 align="center"><u>INFORMASI DATA KARYAWAN</u></h2>
		
 <BR>
		<div class="blok">
 
			
			<div class="kiri">
			<img src="upload/<?php echo $row['image'] ?>">				
			</div>
 
			<div class="kanan">
				<table>
					<tr>
						<th>NIK KARYAWAN</th>
						<th>:</th>
						<td><?php echo $row['nik_karyawan'] ?></td>
					</tr>
					<tr>
						<th>NAMA LENGKAP</th>
						<th>:</th>
						<td><?php echo $row['nama_lengkap'] ?></td>
					</tr>
					<tr>
						<th>NAMA PANGGILAN</th>
						<th>:</th>
						<td><?php echo $row['nama_panggilan'] ?></td>
					</tr>
					<tr>
						<th>TEMPAT LAHIR</th>
						<th>:</th>
						<td><?php echo $row['tempat_lahir'] ?></td>
					</tr>
					<tr>
						<th>TANGGAL LAHIR</th>
						<th>:</th>
						<td><?php echo $row['tanggal_lahir'] ?></td>
					</tr>
					<tr>
						<th>STATUS PERKAWINAN</th>
						<th>:</th>
						<td><?php echo $row['status_perkawinan'] ?></td>
					</tr>
					<tr>
						<th>NOMOR KTP</th>
						<th>:</th>
						<td><?php echo $row['nomor_ktp'] ?></td>
					</tr>
					<tr>
						<th>NOMOR BUKU ANGGOTA</th>
						<th>:</th>
						<td><?php echo $row['nomor_buku_anggota'] ?></td>
					</tr>

</tr>
					</table>
				
			</div>
 
		</div>		
				
					<div class="blok">
					<table>
					<tr>
						<th>NOMOR NPWP</th>
						<th>:</th>
						<td><?php echo $row['nomor_npwp'] ?></td>
					

					<tr>
						<th>SUKU</th>
						<th>:</th>
						<td><?php echo $row['suku'] ?></td>
					</tr>
					<tr>
						<th>AGAMA</th>
						<th>:</th>
						<td><?php echo $row['agama'] ?></td>
					</tr>
					<tr>
						<th>ALAMAT SEKARANG</th>
						<th>:</th>
						<td><?php echo $row['alamat_sekarang'] ?></td>
					</tr>
					<tr>
						<th>ALAMAT KTP</th>
						<th>:</th>
						<td><?php echo $row['alamat_ktp'] ?></td>
					</tr>
					<tr>
						<th>NOMOR BPJS KESEHATAN</th>
						<th>:</th>
						<td><?php echo $row['nomor_bpjs_kesehatan'] ?></td>
					</tr>
					<tr>
						<th>NOMOR BPJS KETENAGAKERJAAN</th>
						<th>:</th>
						<td><?php echo $row['nomor_bpjs_ketenagakerjaan'] ?></td>
					</tr>
					
					
				</table>
				
			</div>
 
		</div>		
 
		
 
		
		</div>
	</div>
</body>
</html>