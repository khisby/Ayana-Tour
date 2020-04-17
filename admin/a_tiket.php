<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		
	}else if($_POST['hal'] == 'ubah'){
		$id = $_POST['id'];
		$tiket = $_POST['tiket'];
		
		mysql_query("UPDATE tbl_transaksi set tiket='$tiket' where id_transaksi=$id");
		header("location:index.php?p=transaksi");
	}else if($_GET['hal'] == 'hapus'){
	
	}
}
?>