<?php
	include "admin/config.php";
	unset($_SESSION['anggota']);
	session_destroy();
	header("location:index.php");
?>