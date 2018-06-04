<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("2.jpg");
background-size:cover;
}
h1{
color:white;
font-family:times new roman;
}

h2{
color:white;
font-family:times new roman;
}
</style>
</head>
<body>
	<center>
	<h1><br><br><br><br>PENDAFTARAN PELANGGAN HOTEL</h1>
	<form action="input.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6" bgcolor="orange">
   		<tr>
    		<td>Nomor_KTP</td>
    		<td>:</td>
    		<td><input type="number" name="Nomor_KTP" placeholder="Masukan Nomor KTP"required></td>
   		</tr>
   		<tr>
    		<td>nama_pelanggan</td>
    		<td>:</td>
    		<td><input type="text" name="nama_pelanggan" placeholder="Masukan Nama" required></td>
   		</tr>
   		<tr>
    		<td>alamat</td>
    		<td>:</td>
    		<td><input type="text" name="alamat" placeholder="Alamat"required></td>
   		</tr>
		<tr>
    		<td>gender</td>
    		<td>:</td>
    		<td><input type="radio" name="gender" value="Laki" checked=/>Laki </br>
        <input type="radio" name="gender" value="Perempuan" checked=/>Perempuan </br>
          
      </tr>
		<tr>
    		<td>nomorhp</td>
    		<td>:</td>
    		<td><input type="text" name="nomorhp" placeholder="Masukan No Hp" required></td>
   		</tr>
		<tr>
    		<td>jeniskamar</td>
    		<td>:</td>
    		<td><input type="radio" name="jeniskamar" value="VIP" checked=/>VIP </br>
        <input type="radio" name="jeniskamar" value="REGULER" checked=/>REGULER </br>
           		
      </tr>
		<tr>
    		<td>checkin</td>
    		<td>:</td>
    		<td><input type="date" name="checkin" required></td>
   		</tr>
   	<tr>
        <td>checkout</td>
        <td>:</td>
        <td><input type="date" name="checkout" required></td>
      </tr>
    

    <tr>
        <td>Status_kamar</td>
        <td>:</td>
        <td><input type="radio" name="status_kamar" value="ADA" checked=/>ADA </br>
        <input type="radio" name="status_kamar" value="KOSONG" checked=/>KOSONG </br>
        </tr>
        </td>
    <tr>
        <td>Jumlah_biaya</td>
        <td>:</td>
        <td><input type="text" name="Jumlah_biaya" placeholder="Masukan Nominal" required></td>
      </tr>
    

    <tr>
        <td>sisa_sewa</td>
        <td>:</td>
        <td><input type="text" name="sisa_sewa" placeholder="Masukan angka" required></td>
      </tr>
    
    	<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">	<input type="reset" value="Reset"></td>
   		</tr>
  		</table>
 	</form>
	<p><h2><a href='/prpl/'> BACK MENU</a></h2></p>
	</center>
</body>
</html>