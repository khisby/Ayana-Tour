<?php
	include "config.php";
	unset($_SESSION['admin']);
	session_destroy();
	header("location:index.php");
?>