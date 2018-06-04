<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("3.jpg");
background-size:cover;
}
</style>
</head>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	
	if(isset($_POST['add'])){
	$Nomor_KTP = $_POST['Nomor_KTP'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$gender = $_POST['gender'];
	$nomorhp = $_POST['nomorhp'];
	$jeniskamar = $_POST['jeniskamar'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$status_kamar = $_POST['status_kamar'];
	$Jumlah_biaya = $_POST['Jumlah_biaya'];
	$sisa_sewa = $_POST['sisa_sewa'];
	$sql = "INSERT INTO pemesanan VALUES ('$Nomor_KTP','$nama_pelanggan','$alamat','$gender','$nomorhp','$jeniskamar','$checkin','$checkout','$status_kamar','$Jumlah_biaya','$sisa_sewa')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output.php'>tampilkan tabel data customer </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> BACK MENU</a> / <a href='finput.php'>MASUKAN DATA</a></h3></center>";
?>