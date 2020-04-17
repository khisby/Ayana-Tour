<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		
	}else if($_GET['hal'] == 'ubah'){
		$id = $_GET['id_transaksi'];
		$transportasi = $_GET['id'];
		
		mysql_query("UPDATE tbl_transaksi set id_transportasi=$transportasi where id_transaksi=$id");
		
		mysql_query("UPDATE tbl_transportasi set=jumlah-1 where id_transportasi=$transportasi");
		header("location:index.php?p=transaksi");
	}else if($_GET['hal'] == 'hapus'){
	
	}
}
?>