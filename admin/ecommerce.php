<h3>HALAMAN PENGELOLAAN TOKO</h3>
<p id="info">
	<a href="index.php?p=ecommerce&pp=paket" class="tombol">PAKET WISATA</a>
	<a href="index.php?p=ecommerce&pp=transportasi" class="tombol">TRANSPORTASI</a>
</p>

<?php
	if(isset($_GET['pp'])){
		$pp = $_GET['pp'];
		include "$pp.php";
	}else{
		include "paket.php";
		}
?>