<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("air.jpg");
background-size:cover;
}
</style>
</head>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	
	if(isset($_POST['add'])){
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$uangmasuk = $_POST['uangmasuk'];
	$uangkeluar = $_POST['uangkeluar'];

	$sql = "INSERT INTO keuangan VALUES ('$bulan','$tahun','$uangmasuk','$uangkeluar')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output4.php'>tampilkan tabel data keuangan </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> goto Menu</a> / <a href='forminputan4.php'>Masukkan terlebih dahulu datanya</a></h3></center>";
?>