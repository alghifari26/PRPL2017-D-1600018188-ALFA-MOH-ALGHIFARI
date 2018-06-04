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
	$sql = "SELECT * FROM keuangan";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data keuangan<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>bulan</center></td><td><center>tahun</center></td><td><center>uangmasuk</center></td><td><center>uangkeluar</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['bulan']."</td>";
			echo "<td>".$row['tahun']."</td>";
			echo "<td>".$row['uangmasuk']."</td>";
			echo "<td>".$row['uangkeluar']."</td>";
			echo "<td><a href='finputan4.php?bulan=".$row['bulan']."'> Input </a></td>";
			echo "<td><a href='delete4.php?bulan=".$row['bulan']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "gak ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> goto Menu</a></h2>";
	$db->close();
?>