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
	$Nomorpekerja = $_POST['Nomorpekerja'];
	$namapekerja = $_POST['namapekerja'];
	$jabatanpekerja = $_POST['jabatanpekerja'];
	$jeniskelamin = $_POST['jeniskelamin'];

	$sql = "INSERT INTO pegawai VALUES ('$Nomorpekerja','$namapekerja','$jabatanpekerja','$jeniskelamin')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output2.php'>tampilkan tabel data pegawai </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> goto Menu</a> / <a href='forminputan2.php'>Masukkan terlebih dahulu datanya</a></h3></center>";
?>