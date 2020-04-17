<?php


include "config.php";
$email = $_POST['email'];
$sandi = $_POST['sandi'];

$q = mysql_query("SELECT * from tbl_admin where email='$email' and sandi='$sandi'");
$h = mysql_num_rows($q);
if($h > 0){
	$_SESSION['admin'] = $email;
	$dd = mysql_fetch_array($q);
	$_SESSION['ll'] = $dd['last_login'];
	mysql_query("UPDATE tbl_admin set last_login='$time' where email='$email' and sandi='$sandi'");
	header("location:index.php?p=artikel");
}else{
	header("location:index.php?p=masuk");
}
?>