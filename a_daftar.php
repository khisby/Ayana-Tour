<?php

include "admin/config.php";
$email = $_POST['email'];
$sandi = md5($_POST['sandi']);
$hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$d = mysql_query("INSERT INTO tbl_anggota(email,sandi,no_hp,alamat)values('$email','$sandi','$hp','$alamat')");
if(!$d){
	header("location: index.php?p=daftar");
}else{
	header("location: index.php?p=masuk&pesan=Berhasil mendaftar");
}

?>