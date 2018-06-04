<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("gnti.jpg");
background-size:cover;
}
h1{
color:blue;
font-family:times new roman;
}
</style>
</head>
<body>
	<center>
	<h1><br><br><br><br>Masukkan Data kamar</h1>
	<form action="inputan4.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>bulan</td>
    		<td>:</td>
    		<td><input type="text" name="bulan" required></td>
   		</tr>
   		<tr>
    		<td>tahun</td>
    		<td>:</td>
    		<td><input type="text" name="tahun" required></td>
   		</tr>
   		<tr>
    		<td>uangmasuk</td>
    		<td>:</td>
    		<td><input type="text" name="uangmasuk" required></td>
   		</tr>
		<tr>
    		<td>uangkeluar</td>
    		<td>:</td>
    		<td><input type="text" name="uangkeluar" required></td>
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