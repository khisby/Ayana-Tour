<h3>HALAMAN DAFTAR TRANSAKSI</h3>

<?php

$qi = mysql_query("SELECT tiket from tbl_transaksi");
if($qi)

if(isset($_GET['id'])){
	$idd = $_GET['id'];
	$qq = mysql_query("SELECT * FROM tbl_transaksi where id_transaksi=$idd");
	$dd = mysql_fetch_array($qq);

	$ia = $dd['email'];
	$iaa = $dd['no_hp'];
	$qa = mysql_query("SELECT * FROM tbl_anggota where email='$ia' and no_hp='$iaa'");
	$da = mysql_fetch_array($qa);

	$ip = $dd['id_paket'];
	$qp = mysql_query("SELECT * FROM tbl_paket where id_paket=$ip");
	$dp = mysql_fetch_array($qp);

	$it = $dp['id_artikel'];
	$qt = mysql_query("SELECT * FROM tbl_artikel where id_artikel=$it");
	$dt = mysql_fetch_array($qt);
	
	if(!empty($dd['id_transportasi'])){
		$itr = $dd['id_transportasi'];
		$qtr = mysql_query("SELECT * FROM tbl_transportasi where id_transportasi=$itr");
		$dtr = mysql_fetch_array($qtr);
	}
}

	if(isset($_GET['pp'])){
		$pp = $_GET['pp'];
		include "$pp.php";
	}else{
		include "d_transaksi.php";
	}
?>