<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		
	}else if($_POST['hal'] == 'ubah'){
		
	}else if($_GET['hal'] == 'hapus'){
		$id = $_GET['id'];
		mysql_query("UPDATE tbl_anggota set status='block' where id_anggota=$id");
		header("location:index.php?p=anggota");
	}
}
?>