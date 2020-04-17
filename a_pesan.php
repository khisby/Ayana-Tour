<?php

	include "admin/config.php";

if(!isset($_SESSION['anggota'])){
	header("location:index.php?p=masuk&pesan=Anda harus masuk terlebih dahulu");
}else{
	if(empty($_GET['paket'])){
		header("location:index.php?p=beranda");
	}else{
		$email = $_GET['email'];
		$no_hp = $_GET['no_hp'];
		$alamat = $_GET['alamat'];
		echo $paket = $_GET['paket'];


		$q = mysql_query("SELECT * FROM tbl_paket where id_paket=$paket");
		$dd = mysql_fetch_array($q);
		$tujuan = $dd['id_artikel'];


		echo $berangkat = $_GET['berangkat'];
		echo $jumlah = $_GET['jumlah'];

		mysql_query("INSERT INTO tbl_transaksi(email,no_hp,alamat,id_paket,berangkat,jumlah,tgl)values('$email','$no_hp','$alamat',$paket,'$berangkat',$jumlah,'$time')");
		header("location: index.php?p=transaksi");
	}
}
?>