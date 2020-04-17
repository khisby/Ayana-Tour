<h3>HALAMAN TRANSPORTASI</h3>
<form action="a_transportasi.php" method="post" id="frm" enctype="multipart/form-data">
	<input type="hidden" name="hal" value="tambah"/>
		<div>
			<label>NAMA ARMADA</label>
			<div>
				<input type="text" name="nama"/>
			</div>
		</div>
		<div>
			<label>KAPASITAS PENUMPANG</label>
			<div>
				<input type="number" name="kapasitas"/>
			</div>
		</div>
		<div>
			<label>JUMLAH ARMADA</label>
			<div>
				<input type="number" name="jumlah"/>
			</div>
		</div>
		<div>
			<label>STATUS KETERSEDIAAN</label>
			<div>
				<select name="status">
					<option value="TERSEDIA" selected>TERSEDIA</option>
					<option value="TIDAK TERSEDIA" >TIDAK TERSEDIA</option>
				</select>
			</div>
		</div>
		<div>
			<div>
				<input type="submit" value="SIMPAN"/>
			</div>
		</div>
</form>