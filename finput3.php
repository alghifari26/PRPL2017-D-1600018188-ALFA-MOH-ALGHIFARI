<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("bg5.jpg");
background-size:cover;
}
h1{
color:black;
font-family:times new roman;
}
</style>
</head>
<body>
	<center>
	<h1><br><br><br><br>Masukkan Data kamar</h1>
	<form action="finput3.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>NomorKamar</td>
    		<td>:</td>
    		<td><input type="text" name="Nomorkamar" required></td>
   		</tr>
   		<tr>
    		<td>NamaKamar</td>
    		<td>:</td>
    		<td><input type="text" name="namakamar" required></td>
   		</tr>
   		<tr>
    		<td>Jeniskamar</td>
    		<td>:</td>
    		<td><input type="radio" name="Jenis kamar" value="VIP" checked=/>VIP</br>
        <input type="radio" name="Jenis kamar" value="REGULER" checked=/>REGULER </br>
          	</tr>
		<tr>
    		<td>hargasewa</td>
    		<td>:</td>
    		<td><input type="text" name="hargasewa" required></td>
   		</tr>
   		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">	<input type="reset" value="Reset"></td>
   		</tr>
  		</table>
 	</form>
	<p><h2><a href='/prpl/'> goto Menu</a></h2></p>
	</center>
</body>
</html>