<h3>HALAMAN DAFTAR TRANSAKSI</h3>
<table class="tbl">
	<tr>
		<td>TGL</td>
		<td>PAKET</td>
		<td>TUJUAN</td>
		<td>KEBERANGKATAN</td>
		<td>AKSI</td>
	</tr>
	<?php
		$anggota = $_SESSION['anggota'];
		$q = mysql_query("SELECT * from tbl_transaksi where email='$anggota'");
		while($dd = mysql_fetch_array($q)){
		
		$paket = $dd['id_paket'];
		$qq = mysql_query("SELECT * from tbl_paket where id_paket=$paket");
		$ddd = mysql_fetch_array($qq);
		
		$artikel = $ddd['id_artikel'];
		$qqqqq = mysql_query("SELECT * from tbl_artikel where id_artikel='$artikel'");
		$dddd = mysql_fetch_array($qqqqq);
		
		?>	
		<tr>
			<td><?php echo $dd['tgl']?></td>
			<td><?php echo $ddd['nama']?></td>
			<td><?php echo $dddd['nama']?></td>
			<td><?php echo $dd['berangkat']?></td>
			<td><a href="index.php?p=cek&id=<?php echo $dd['id_transaksi']?>">CEK</a></td>
		</tr>
	<?php } ?>
</table>