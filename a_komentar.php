<?php
	include "admin/config.php";
	$id = $_GET['id'];
	echo $email = $_GET['email'];
	echo $rating = $_GET['rating'];
	echo $ket = $_GET['ket'];
	
	mysql_query("INSERT INTO tbl_komentar(email,rating,ket,id_artikel,tgl)values('$email',$rating,'$ket',$id,'$time')");
	
	$q = mysql_query("SELECT avg(rating) as rat from tbl_komentar where id_artikel=$id");
	$d = mysql_fetch_array($q);
	
	$rat = ceil($d['rat']);
	mysql_query("UPDATE tbl_artikel set rating=$rat where id_artikel=$id");
	header("location: index.php?p=detail_artikel&id=$id");
?>