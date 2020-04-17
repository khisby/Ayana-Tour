<?php
	if(!empty($dd['id_transportasi'])){
		echo "Transportasi terpilih untuk transaksi ini adalah " . $dtr['nama'];
	}else{?>
		<table class="tbl">
		  <tr>
			<td>NAMA ARMADA</td>
			<td>KAPASITAS</td>
			<td>JUMLAH TERSEDIA</td>
			<td>AKSI</td>
		  </tr>
		<?php
		$qqqq = mysql_query("SELECT * FROM tbl_transportasi order by nama asc");
		while($dddd = mysql_fetch_array($qqqq)){
		if($dddd['kapasitas'] > $dd['jumlah']){
			if($dddd['jumlah'] > 0){
		?>
		<tr>
			<td><?php echo $dddd['nama']?></td>
			<td><?php echo $dddd['kapasitas']?></td>
			<td><?php echo $dddd['jumlah']?></td>
			<td><a href="a_trans_t.php?hal=ubah&id=<?php echo $dddd['id_transportasi']?>&id_transaksi=<?php echo $_GET['id']?>">PAKAI </a></td>
		  </tr>
		<?php
		} } } 
		?>
		</table>
	<?php }
?>
