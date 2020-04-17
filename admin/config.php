<?php
	include "mysql.php";
	mysql_connect('localhost','root','');
	$db = mysql_select_db('pariwisata6');
	if(!$db){
		echo "koneksi gagal";
	}
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	$time = date("d-m-Y H-i-s");
?>