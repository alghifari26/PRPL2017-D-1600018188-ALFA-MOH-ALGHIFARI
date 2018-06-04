<html>
<head><title></title></head>
<style type="text/css">
body{
background-color :#4DD0E1;
background-size:cover;
}
</style>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	$sql = "SELECT * FROM pegawai";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data pegawai<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>Nomorpekerja</center></td><td><center>namapekerja</center></td><td><center>jabatankerja</center></td><td><center>jeniskelamin</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['Nomorpekerja']."</td>";
			echo "<td>".$row['namapekerja']."</td>";
			echo "<td>".$row['jabatankerja']."</td>";
			echo "<td>".$row['jeniskelamin']."</td>";
			echo "<td><a href='finputan2.php?Nomorpekerja=".$row['Nomorpekerja']."'> Input </a></td>";
			echo "<td><a href='delete2.php?Nomorpekerja=".$row['Nomorpekerja']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "gak ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> goto Menu</a></h2>";
	$db->close();
?>