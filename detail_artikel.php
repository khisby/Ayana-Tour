<?php
$id = $_GET['id'];
$qq = mysql_query("SELECT * from tbl_artikel where id_artikel=$id");
$dd = mysql_fetch_array($qq);
?>
<h3>HALAMAN DETAIL DESTINASI PARIWISATA</h3>
<div id="d_a">
	<div>
		<div><span><?php echo $dd['nama']?></span></div>
		<img src="admin/<?php echo $dd['gambar']?>" alt="gambar"/>
	</div>
	<p id="rating"> ARTIKEL INI TERMASUK PADA KATEGORI <?php echo $dd['kategori']?> </br> </br> </hr>
		NILAI UNTUK ARTIKEL INI <?php echo $dd['rating']?>
	</p>
	<p><?php echo $dd['ket']?></p>
</div>
	<?php
		$qs = mysql_query("SELECT * from tbl_paket where id_artikel=$id");
		$ds = mysql_num_rows($qs);
		if($ds > 0){?>
			<p><a href="index.php?p=detail_produk&id=<?php echo $id?>" class="tombol kanan">PESAN PAKET WISATA</a></p>
		<?php }
	?>

<div id="komentar">
	<h3>TAMBAHKAN KOMENTAR UNTUK ARTIKEL INI</h3>
	<form action="a_komentar.php" method="GET" id="frm">
		<input type="hidden" name="id" value="<?php echo $id?>"/>
		<div>
			<label>EMAIL</label>
			<div>
				<input type="text" name="email" 
					<?php
						if(isset($_SESSION['anggota'])){ ?>
							value="<?php echo $_SESSION['anggota']?>" readonly
						<?php }?>
				/>
			</div>
		</div>
		<div>
			<label>RATING</label>
			<div>
				<select name="rating">
					<option value="0" selected hidden>PILIH SALAH SATU</option>
					<option value="5">5 Bintang (Paling tinggi)</option>
					<option value="4">4 Bintang</option>
					<option value="3">3 Bintang</option>
					<option value="2">2 Bintang</option>
					<option value="1">1 Bintang (Paling rendah)</option>
				</select>
			</div>
		</div>
		<div>
			<label>KOMENTAR</label>
			<div>
				<textarea name="ket"></textarea>
			</div>
		</div>
		<div>
			<div>
				<input type="submit" value="KOMENTARI"/>
			</div>
		</div>
	</form>
</div>

<div id="komentarnya">
	<?php
	
		$qk = mysql_query("SELECT * FROM tbl_komentar WHERE id_artikel=$id ORDER BY tgl desc");
		while($dk = mysql_fetch_array($qk)){
	?>
		<table class="tbl komentar_tbl">
			<tr>
				<td><?php echo $dk['email']?></td>
				<td><?php echo $dk['tgl']?></td>
			</tr>
			<tr>
				<td colspan="2"><?php echo $dk['ket']?></td>
			</tr>
		</table>
	<?php } ?>
</div>