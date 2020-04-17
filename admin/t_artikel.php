<h3>HALAMAN ARTIKEL</h3>
<form action="a_artikel.php" method="post" id="frm" enctype="multipart/form-data">
	<input type="hidden" name="hal" value="tambah"/>
		<div>
			<label>KATEGORI</label>
			<div>
				<select name="kategori">
					<?php
						$qk = mysql_query("SELECT * from tbl_kategori where hal='ARTIKEL PARIWISATA' order by nama asc");
						while($dk = mysql_fetch_array($qk)){
					?>
						<option value="<?php echo $dk['nama']?>"><?php echo $dk['nama']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div>
			<label>JUDUL</label>
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