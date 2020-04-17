<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		$nama = $_POST['nama'];
		$ket = $_POST['halaman'];
	
		mysql_query("INSERT INTO tbl_kategori(nama,hal)values('$nama','$ket')");
		header("location:index.php?p=kategori");
	}else if($_POST['hal'] == 'ubah'){
		
	}else if($_GET['hal'] == 'hapus'){
		
	}
}
?>