<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("air.jpg");
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
	<h1><br><br><br><br>Masukkan Data pegawai</h1>
	<form action="inputan2.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>Nomorpekerja</td>
    		<td>:</td>
    		<td><input type="text" name="Nomorpekerja" required></td>
   		</tr>
   		<tr>
    		<td>namapekerja</td>
    		<td>:</td>
    		<td><input type="text" name="namapekerja" required></td>
   		</tr>
   		<tr>
    		<td>jabatankerja</td>
    		<td>:</td>
    		<td><input type="text" name="jabatankerja" required></td>
   		</tr>
		<tr>
    		<td>jeniskelamin</td>
    		<td>:</td>
    		<td><input type="text" name="jeniskelamin" required></td>
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