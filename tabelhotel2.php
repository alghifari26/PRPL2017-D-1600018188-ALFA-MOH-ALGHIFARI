<?php
	$db =  new mysqli("localhost","root","","wasapsaph");
	$sql = "create table pegawai (Nomor_KTP varchar(11) not null primary key,nama_pelanggan varchar(20) not null, alamat varchar(10) not null, gender varchar(10) not null, nomorhp varchar(20) not null, jeniskamar varchar(10) not null,tanggalpesan varchar(10) not null)";

	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Tabel berhasil dibuat</h1></center>";
	}else{
		echo "<center><h1>Tabel gagal dibuat</h1></center>".$db->error;
	}
	echo "<center><h3><a href='/prpl/'> goto Menu</a></center>";
?>