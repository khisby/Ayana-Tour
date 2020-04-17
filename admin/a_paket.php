<?php
include "config.php";

if(isset($_GET['hal']) OR isset($_POST['hal'])){
	if($_POST['hal'] == 'tambah'){
		$nama = $_POST['nama'];
		$ket = $_POST['ket'];
		$harga = $_POST['harga'];
		$ketemu = $_POST['ketemu'];
		$tujuan = $_POST['tujuan'];
		$kategori = $_POST['kategori'];
		
		$tmp = $_FILES['gambar']['tmp_name'];
		$pindah  = 'img/paket/' .$time. '.jpg';
		move_uploaded_file($tmp, $pindah);
		
		mysql_query("INSERT INTO tbl_paket(nama,gambar,ket,tgl,harga,ketemu,id_artikel,kategori)values('$nama','$pindah','$ket','$time',$harga,'$ketemu',$tujuan,'$kategori')");
		header("location:index.php?p=ecommerce&pp=paket");
	}else if($_POST['hal'] == 'ubah'){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$ket = $_POST['ket'];
		$harga = $_POST['harga'];
		$ketemu = $_POST['ketemu'];
		$tujuan = $_POST['tujuan'];
		
		if(!empty($_POST['kategori'])){
			$kategori = $_POST['kategori'];
			mysql_query("UPDATE tbl_paket set kategori='$kategori' where id_paket=$id");
		}
		
		if(!empty($_FILES['gambar']['tmp_name'])){
			$tmp = $_FILES['gambar']['tmp_name'];
			$pindah  = 'img/paket/' .$time. '.jpg';
			move_uploaded_file($tmp, $pindah);
			mysql_query("UPDATE tbl_paket set gambar='$pindah' where id_paket=$id");
		}
		
		mysql_query("UPDATE tbl_paket set nama='$nama',ket='$ket',tgl='$time', harga=$harga, ketemu='$ketemu',id_artikel=$tujuan where id_paket=$id");
		header("location:index.php?p=ecommerce&pp=paket");
	}else if($_GET['hal'] == 'hapus'){
		$id = $_GET['id'];
		mysql_query("DELETE from tbl_paket where id_paket=$id");
		header("location:index.php?p=ecommerce&pp=paket");
	}
}
?>