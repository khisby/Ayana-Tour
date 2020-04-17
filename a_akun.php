<?php

include "admin/config.php";
$anggota = $_SESSION['anggota'];
$sandi = md5($_POST['sandi']);
mysql_query("UPDATE tbl_anggota set sandi='$sandi' where email='$anggota'");
header("location: index.php");

?>