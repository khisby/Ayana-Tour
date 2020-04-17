<h3>HALAMAN PAKET PARIWISATA</h3>
<div id="ccl">
	<?php
		$qqq = mysql_query("SELECT * FROM tbl_paket order by nama asc");
		while($ddd = mysql_fetch_array($qqq)){
	?>
		<a href="index.php?p=detail_produk&id=<?php echo $ddd['id_paket']?>">
			<div class="box">
				<img src="admin/<?php echo $ddd['gambar']?>" alt="gambar"/>
				<div>
					<span><?php echo $ddd['nama']?></span>
				</div>
			</div>
		</a>
	<?php } ?>
	
</div>