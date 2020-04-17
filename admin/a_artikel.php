<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		$nama = $_POST['nama'];
		$ket = $_POST['ket'];
		$kategori = $_POST['kategori'];
		
		$tmp = $_FILES['gambar']['tmp_name'];
		$pindah  = 'img/artikel/' .$time. '.jpg';
		move_uploaded_file($tmp, $pindah);
		
		mysql_query("INSERT INTO tbl_artikel(nama,gambar,ket,tgl,kategori)values('$nama','$pindah','$ket','$time','$kategori')");
		header("location:index.php?p=artikel");
	}else if($_POST['hal'] == 'ubah'){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$ket = $_POST['ket'];
		if(!empty($_POST['kategori'])){
			$kategori = $_POST['kategori'];
			mysql_query("UPDATE tbl_artikel set kategori='$kategori' where id_artikel=$id");
		}
		
		if(!empty($_FILES['gambar']['tmp_name'])){
			$tmp = $_FILES['gambar']['tmp_name'];
			$pindah  = 'img/artikel/' .$time. '.jpg';
			move_uploaded_file($tmp, $pindah);
			mysql_query("UPDATE tbl_artikel set gambar='$pindah' where id_artikel=$id");
		}
		
		mysql_query("UPDATE tbl_artikel set nama='$nama',ket='$ket',tgl='$time' where id_artikel=$id");
		header("location:index.php?p=artikel");
	}else if($_GET['hal'] == 'hapus'){
		$id = $_GET['id'];
		mysql_query("DELETE from tbl_artikel where id_artikel=$id");
		header("location:index.php?p=artikel");
	}
}
?>