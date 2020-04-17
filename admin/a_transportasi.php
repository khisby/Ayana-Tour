<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		$nama = $_POST['nama'];
		$ket = $_POST['kapasitas'];
		$harga = $_POST['jumlah'];
		$ketemu = $_POST['status'];
		
		mysql_query("INSERT INTO tbl_transportasi(nama,kapasitas,jumlah,status)values('$nama',$ket,$harga,'$ketemu')");
		header("location:index.php?p=ecommerce&pp=transportasi");
	}else if($_POST['hal'] == 'ubah'){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$ket = $_POST['kapasitas'];
		$harga = $_POST['jumlah'];
		$ketemu = $_POST['status'];
				
		mysql_query("UPDATE tbl_transportasi set nama='$nama',kapasitas=$ket,jumlah=$harga, status='$ketemu' where id_transportasi=$id");
		header("location:index.php?p=ecommerce&pp=transportasi");
	}else if($_GET['hal'] == 'hapus'){
		$id = $_GET['id'];
		mysql_query("DELETE from tbl_transportasi where id_transportasi=$id");
		header("location:index.php?p=ecommerce&pp=transportasi");
	}
}
?>