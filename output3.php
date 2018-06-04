<html>
<head><title></title></head>
<style type="text/css">
body{
background-color :white;
background-size:cover;
}
</style>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	$sql = "SELECT * FROM kamar";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data kamar<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>Nomorkamar</center></td><td><center>namakamar</center></td><td><center>jeniskamar</center></td><td><center>hargasewa</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows>0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['Nomorkamar']."</td>";
			echo "<td>".$row['namakamar']."</td>";
			echo "<td>".$row['jeniskamar']."</td>";
			echo "<td>".$row['hargasewa']."</td>";
			echo "<td><a href='forminputan3.php?Nomorkamar=".$row['Nomorkamar']."'> Input </a></td>";
			echo "<td><a href='delete3.php?Nomorkamar=".$row['Nomorkamar']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "gak ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> BACK MENU </a></h2>";
	$db->close();
?>