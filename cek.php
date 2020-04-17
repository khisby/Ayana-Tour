<?php
	$id = $_GET['id'];
	$qq = mysql_query("SELECT * FROM tbl_transaksi where id_transaksi=$id");
	$dd = mysql_fetch_array($qq);
	
	$paket = $dd['id_paket'];
	$qqq = mysql_query("SELECT * from tbl_paket where id_paket='$paket'");
	$ddd = mysql_fetch_array($qqq);
?>
<h3>HALAMAN CEK PROSES TRANSAKSI</h3>
<div id="frm">
	<table class="tbl">
		<tr>
			
		</tr>
		<tr>
			<td>PAKET WISATA</td>
		</tr>
		<tr>
			<td><?php echo $ddd['nama']?></td>
		</tr>
		<tr>
			<td>TANGGAL BERANGKAT</td>
		</tr>
		<tr>
			<td><?PHP echo $dd['berangkat']?></td>
		</tr>
		<tr>
			<td>HARGA</td>
		</tr>
		<tr>
			<td>Rp.<?PHP echo number_format($ddd['harga'])?></td>
		</tr>
		<tr>
			<td>TEMPAT BERTEMU</td>
		</tr>
		<tr>
			<td><?PHP echo $ddd['ketemu']?></td>
		</tr>
		<tr>
			<td>JUMLAH ORANG</td>
		</tr>
		<tr>
			<td><?PHP echo $dd['jumlah']?></td>
		</tr>
		<tr>
			<td>TRANSPORTASI</td>
		</tr>
		<tr>
			<td>
				<?php
					if($dd['id_transportasi'] == 0){
						echo "ADMIN BELUM MEMILIH TRANSPORTASI";
					}else{
						$trans = $dd['id_transportasi'];
						$qt = mysql_query("SELECT * FROM tbl_transportasi where id_transportasi=$trans");
						$dddd = mysql_fetch_array($qt);
						echo "ANDA MENGGUNAKAN TRANSPORTASI " . $dddd['nama'];
					}
				?>
			</td>
		</tr>
		<tr>
			<td>PEMBAYARAN</td>
		</tr>
		<tr>
			<td>
				<?php
					if($dd['id_transportasi'] == 0){
						echo "ANDA BELUM BISA MELAKUKAN PEMBAYARAN HINGGA ADMIN MENYETUJUI TRANSAKSI INI";
					}else{
						if(!empty($dd['pembayaran'])){
							echo "<img src='admin/" .$dd['pembayaran'] . "' alt='PEMBAYARAN' class='gambar'/>";
						}else{?>
								<h5>KIRIM PEMBAYARAN SESUAI HARGA KE NOMOR REK.271895478912</h5>
								<form action="a_pembayaran.php" method="post" id="frm" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $id?>"/>
								<label>UPLOAD BUKTI PEMBAYARAN</label>
									<div>
										<input type="file" name="gambar"/>
										<input type="submit" value="KIRIM"/>
									</div>
								</div>
							</form>
						<?php } } 
					?>
			</td>
		</tr>
		<tr>
			<td>TIKET</td>
		</tr>
		<tr>
			<td>
				<?php
					if(empty($dd['pembayaran'])){
						echo "LAKUKAN PEMBAYARAN UNTUK MENDAPATKAN KODE TIKET";
					}else{
						
							if(empty($dd['tiket'])){
								echo "ADMIN BELUM MENGIRIM KODE TIKET";
							}else{
							echo "KODE TIKET ANDA \"" . $dd['tiket'] . "\"";?>
							<h6>* SIMPAN KODE TIKET INI, TUNJUKKAN KE ADMIN AYANA TOUR DI TEMPAT PERTEMUAN</h6>
					<?php } }
				?>
			</td>
		</tr>
	</table>
	<a href="" onclick="window.print()">PRINT</a>
</div>
