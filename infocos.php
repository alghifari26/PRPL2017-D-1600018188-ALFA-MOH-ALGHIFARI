
<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	$sql = "SELECT * FROM pemesanan";
	$data = $db->query($sql);
	echo "<h1><center><br><br> DATA PELANGGAN<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>Nomor_KTP</center></td><td><center>nama_pelanggan</center></td><td><center>alamat</center></td><td><center>gender</center></td><td><center>nomorhp</center></td><td><center>jeniskamar</center></td><td><center>checkin</center></td><td><center>checkout</center></td><td><center>status_kamar</center></td><td><center>Jumlah_biaya</center></td><td><center>sisa_sewa</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['Nomor_KTP']."</td>";
			echo "<td>".$row['nama_pelanggan']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['nomorhp']."</td>";
			echo "<td>".$row['jeniskamar']."</td>";
			echo "<td>".$row['checkin']."</td>";
			echo "<td>".$row['checkout']."</td>";
			echo "<td>".$row['status_kamar']."</td>";
			echo "<td>".$row['Jumlah_biaya']."</td>";
			echo "<td>".$row['sisa_sewa']."</td>";

			echo "<td><a href='finput.php?Nomor_KTP=".$row['Nomor_KTP']."'> Input </a></td>";
			echo "<td><a href='hapus.php?Nomor_KTP=".$row['Nomor_KTP']."'> hapus </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "TIDAK ADA DATA TERINPUT";
	}
	echo "</table>";$db->close();
?>
<html>
<head><title></title></head>					``
<style type="text/css">
body{
background-color :white;
background-size:cover;
}
</style>
<body>
  		<table cellpadding="3" cellspacing="0" border="6" bgcolor="white">
	<form action="output.php" method="post">
   		<tr>
    		<td>from</td>
    		<td>:</td>
    		<td><input type="date" id="from" name="from"></td>
   	
   			
    		<td>to</td>
    		<td>:</td>
    		<td><input type="date" id="to" name="to"></td>
   		/
   			<td><input type="submit" value="Filter"></td>
   		
   		
   		</form><tbody>


       <tbody>
                </table>         
<center>

</form>
</body>
</html>