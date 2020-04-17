<h3>HALAMAN KATEGORI</h3>
<form action="a_kategori.php" method="post" id="frm" enctype="multipart/form-data">
	<input type="hidden" name="hal" value="tambah"/>
		<div>
			<label>JUDUL KATEGORI</label>
			<div>
				<input type="text" name="nama"/>
			</div>
		</div>
		<div>
			<label>UNTUK HALAMAN?</label>
			<div>
				<select name="halaman">
					<option value="ARTIKEL PARIWISATA">ARTIKEL PARIWISATA</option>
					<option value="PAKET PARIWISATA">PAKET PARIWISATA</option>
				</select>
			</div>
		</div>
		<div>
			<div>
				<input type="submit" value="SIMPAN"/>
			</div>
		</div>
</form>