<?php
	$id = $_GET['id'];
	$qq =mysql_query("SELECT * FROM tbl_paket where id_paket=$id");
	$dd = mysql_fetch_array($qq);
?>

<form action="a_paket.php" method="post" id="frm" enctype="multipart/form-data">
<input type="hidden" name="hal" value="ubah"/>
<input type="hidden" name="id" value="<?php echo $id?>"/>
		<div>
			<label>KATEGORI</label>
			<div>
				<select name="kategori">
					<option value="<?php echo $dd['kategori']?>" selected hidden><?php echo $dd['kategori']?></option>
					<?php
						$qk = mysql_query("SELECT * from tbl_kategori where hal='PAKET PARIWISATA' order by nama asc");
						while($dk = mysql_fetch_array($qk)){
					?>
						<option value="<?php echo $dk['nama']?>"><?php echo $dk['nama']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div>
			<label>NAMA PAKET</label>
			<div>
				<input type="text" name="nama" value="<?php echo $dd['nama']?>"/>
			</div>
		</div>
		<div>
			<label>GAMBAR</label>
			<div>
				<input type="file" name="gambar"/>
			</div>
		</div>
		<div>
			<label>HARGA</label>
			<div>
				<input type="text" name="harga" value="<?php echo $dd['harga']?>"/>
			</div>
		</div>
		<div>
			<label>TUJUAN WISATA</label>
			<div>
				<select name="tujuan">
					<option value="<?php echo $dd['id_artikel']?>" selected hidden>
						<?php 
							$artikel = $dd['id_artikel'];
							$qqq = mysql_query("SELECT * from tbl_artikel where id_artikel=$artikel");
							$ddd = mysql_fetch_array($qqq);
							echo $ddd['nama']
						?>
					</option>
					<?php
						$qqq = mysql_query("SELECT * from tbl_artikel");
						while($ddd = mysql_fetch_array($qqq)){?>
							<option value="<?php echo $ddd['id_artikel']?>"><?php echo $ddd['nama']?></option>
						<?php }
					?>
				</select>
			</div>
		</div>
		<div>
			<label>TEMPAT BERTEMU</label>
			<div>
				<textarea name="ketemu"><?php echo $dd['ketemu']?></textarea>
			</div>
		</div>
		<div>
			<label>KETERANGAN</label>
			<div>
				<textarea name="ket"><?php echo $dd['ket']?></textarea>
			</div>
		</div>
		<div>
			<div>
				<input type="submit" value="SIMPAN"/>
			</div>
		</div>
</form>