<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	$id_pegawai = @$_GET['Nomorpekerja'];
	$sql = "DELETE from pegawai where Nomorpekerja='$Nomorpekerja' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>delete success </h1></center></br></br></br>";
	}else{
		echo "<center><h1>delete failed </h1></center>".$db->error;
	}
	
	echo "<center><h2><td><a href='output2.php'> tampilkan kembali tabel</a><br></h2></center>";
	echo "<center><h2><a href='/prpl/'> goto Menu</a></h2></center>";
?>2