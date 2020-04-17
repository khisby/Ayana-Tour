<div id="header">
	<p>
		<span>Selamat datang: 
			<a href="index.php?p=akun"><?php echo $_SESSION['anggota']?></a>
		</span>	
		<span><a href="index.php?p=keluar">Keluar</a></span>
	</p>
		<div id="logo">
			<a href="index.php"><img src="admin/img/material/logo.png"/></a>
		</div>
	<ul>
		<li><a href="index.php?p=beranda">BERANDA</a></li>
		<li><a href="index.php?p=paket">PAKET PARIWISATA</a></li>
		<li><a href="index.php?p=tujuan">DESTINASI PARIWISATA</a></li>
		<li><a href="index.php?p=transaksi">TRANSAKSI</a></li>
	</ul>
	<form action="index.php" method="get">
			<input type="text" name="c"/>
			<input type="submit" value=" "/>
	</form>
</div>