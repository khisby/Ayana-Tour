<?php
	include "admin/config.php";
	
	$email = $_POST['email'];
	$sandi = md5($_POST['sandi']);
	
	$q = mysql_query("SELECT * from tbl_anggota where email='$email' and sandi='$sandi'");
	$h = mysql_num_rows($q);
	if($h > 0){
		$d = mysql_fetch_array($q);
		if($d['status'] == 'block'){
			header("location: index.php?p=masuk&pesan=Akun anda ditahan admin");
		}else{
			$_SESSION['anggota'] = $email;
			mysql_query("UPDATE tbl_anggota set last_login='$time' where email='$email' and sandi='$sandi'");
			header("location: index.php");
		}
	}else{
		header("location: index.php?p=masuk");
	}
?>