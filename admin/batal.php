<?php
include "config.php";
	$id = $_GET['id'];
	mysql_query("UPDATE from tbl_transaksi set status='batal' where id_transaksi=$id");
	header("location:index.php?p=transaksi");
?>