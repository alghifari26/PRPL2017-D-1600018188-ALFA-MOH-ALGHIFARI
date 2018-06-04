
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
<?php
                require('koneksi.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : ' ');
                $to = (isset($_POST['to']) ? $_POST['to'] : ' ');
     
     
                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM pemesanan where checkin between '".$_POST['from']."' AND '".$_POST['to']."' ORDER BY Nomor_KTP ASC");
                    while ($mem = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$mem['Nomor_KTP'].'</td>';
                    echo '<td>'.$mem['nama_pelanggan'].'</td>';
                    echo '<td>'.$mem['checkin'].'</td>';
                    echo '<td>'.$mem['checkout'].'</td>';
                    echo '<td>'.$mem['jeniskamar'].'</td>';
                    echo '<td>'.$mem['nomorhp'].'</td>';
                    echo '<td>'.$mem['gender'].'</td>';
                    echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['Jumlah_biaya'].'</td>';
                    echo '<td>'.$mem['sisa_sewa'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM pemesanan");

                  while ($mem = mysqli_fetch_assoc($result)):


                    echo '<tr>';
                    echo '<td>'.$mem['Nomor_KTP'].'</td>';
                    echo '<td>'.$mem['nama_pelanggan'].'</td>';
                    echo '<td>'.$mem['checkin'].'</td>';
                    echo '<td>'.$mem['checkout'].'</td>';
                    echo '<td>'.$mem['jeniskamar'].'</td>';
                    echo '<td>'.$mem['nomorhp'].'</td>';
                    echo '<td>'.$mem['gender'].'</td>';
                    echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['Jumlah_biaya'].'</td>';
                    echo '<td>'.$mem['sisa_sewa'].'</td>';
                    echo '</tr>';
                endwhile;
                }
                /* free result set */
                $result->close();
                ?>


       <tbody>
                </table>         
<center>
<P><SCRIPT language="JavaScript">
<!--
//window.onload = function(){}
function jumlah_hari(){
	var bil1 = parseFloat(document.finput.checkin.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.finput.checkout.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center>lamanya hari penginapan : " + hasil +" hari</center>");
}
function harga(){
	var VIP = parseFloat(document.finput.status_kamar.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.finput.checkin.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.finput.checkout.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = VIP * hasil;
	document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center>lamanya hari penginapan : " + hasil +" hari</center>");
	document.write("<center>total jumlah harga :Rp. "+ harga +"</center>");

}
--></SCRIPT></P></center>
<FORM NAME ="finput">
<PRE>
<font color="black">Tanggal checkin  :<input type="number" size="11" name="checkin"></font></br>
<font color="black">Tanggal checkout :<input type="number" size="11" name="checkout"></font></br>
<font color="black">harga kamar       :<input type="text" size="11" name="status_kamar"></font>
</PRE>
<INPUT TYPE="button" value="total" onclick="harga()">            
 <INPUT TYPE="button" value="Jumlah Hari Inap" onclick="jumlah_hari()">
<INPUT TYPE="button" value="Jumlah harga" onclick="harga()">
<INPUT TYPE="button" value="Diskon" onclick="sisa_sewa()">            
<INPUT TYPE="reset" value="Ulang"><br/><br/>
</form>
</body>
</html>