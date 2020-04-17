<form action="a_paket.php" method="post" id="frm" enctype="multipart/form-data">
	<input type="hidden" name="hal" value="tambah"/>
		<div>
			<label>KATEGORI</label>
			<div>
				<select name="kategori">
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
				<input type="text" name="nama"/>
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
				<input type="text" name="harga"/>
			</div>
		</div>
		<div>
			<label>TUJUAN WISATA</label>
			<div>
				<select name="tujuan">
					<option value="0" selected hidden>PILIH SALAH SATU</option>
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
				<textarea name="ketemu"></textarea>
			</div>
		</div>
		<div>
			<label>KETERANGAN</label>
			<div>
				<textarea name="ket"></textarea>
			</div>
		</div>
		<div>
			<div>
				<input type="submit" value="SIMPAN"/>
			</div>
		</div>
</form>