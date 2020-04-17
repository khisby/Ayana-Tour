<?php
	include "admin/config.php";
	
	$id = $_POST['id'];
	
	$tmp = $_FILES['gambar']['tmp_name'];
	$pindah  = 'img/pembayaran/' .$time. '.jpg';
	move_uploaded_file($tmp, 'admin/' . $pindah);
	
	mysql_query("UPDATE tbl_transaksi set pembayaran='$pindah' where id_transaksi=$id");
	header("location: index.php?p=cek&id=$id");
?>