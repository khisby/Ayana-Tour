<?php 
if(isset($_GET['pesan'])){
	$p = $_GET['pesan'];
	echo "<script>alert('$p')</script>";
}

?>

<h3>HALALAMAN MASUK</h3>
<form action="a_masuk.php" method="post" id="frm">
	<div>
		<label>EMAIL</label>
		<div>
			<input type="text" name="email"/>
		</div>
	</div>
	<div>
		<label>SANDI</label>
		<div>
			<input type="password" name="sandi"/>
		</div>
	</div>
	<div>
		<div>
			<input type="submit" value="MASUK"/>
		</div>
	</div>
</form>

<h5>Belum punya akun? <a href="index.php?p=daftar">daftar</a></h5>