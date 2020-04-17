<?php
	$id = $_GET['id'];
	$qq =mysql_query("SELECT * FROM tbl_artikel where id_artikel=$id");
	$dd = mysql_fetch_array($qq);
?>

<h3>HALAMAN ARTIKEL</h3>
<form action="a_artikel.php" method="post" id="frm" enctype="multipart/form-data">
<input type="hidden" name="hal" value="ubah"/>
<input type="hidden" name="id" value="<?php echo $id?>"/>
		<div>
			<label>KATEGORI</label>
			<div>
				<select name="kategori">
					<option value="<?php echo $dd['kategori']?>" selected hidden><?php echo $dd['kategori']?></option>
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