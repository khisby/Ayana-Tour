<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		
	}else if($_POST['hal'] == 'ubah'){
		
	}else if($_GET['hal'] == 'hapus'){
		$id = $_GET['id'];
		mysql_query("UPDATE tbl_komentar set ket='KOMENTAR TELAH DI HAPUS ADMIN' where id_komentar=$id");
		header("location:index.php?p=komentar");
	}
}
?>