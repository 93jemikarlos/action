<!DOCTYPE html>
<html>
<head>
	<title>Grafik Data Karyawan</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body background="upload/3.jpg">
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>GRAFIK DATA KARYAWAN<br/></h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

	
		</tbody>
	</table>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Kristen", "Katholik"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($connection,"select * from tbl_karyawan where agama='kristen'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($connection,"select * from tbl_karyawan where agama='katholik'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>