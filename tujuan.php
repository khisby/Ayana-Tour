<h3>HALAMAN DESTINASI WISATA</h3>
<div id="ccl">
	<?php
		$qqq = mysql_query("SELECT * FROM tbl_artikel order by nama asc");
		while($ddd = mysql_fetch_array($qqq)){
	?>
		<a href="index.php?p=detail_artikel&id=<?php echo $ddd['id_artikel']?>">
			<div class="box">
				<img src="admin/<?php echo $ddd['gambar']?>" alt="gambar"/>
				<div>
					<span><?php echo $ddd['nama']?></span>
				</div>
			</div>
		</a>
	<?php } ?>
	
</div>