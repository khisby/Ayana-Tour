<?php
	$id = $_GET['id'];
	$qq =mysql_query("SELECT * FROM tbl_transportasi where id_transportasi=$id");
	$dd = mysql_fetch_array($qq);
?>

<h3>HALAMAN TRANSPORTASI</h3>
<form action="a_transportasi.php" method="post" id="frm" enctype="multipart/form-data">
<input type="hidden" name="hal" value="ubah"/>
<input type="hidden" name="id" value="<?php echo $id?>"/>
		<div>
			<label>NAMA ARMADA</label>
			<div>
				<input type="text" name="nama" value="<?php echo $dd['nama']?>"/>
			</div>
		</div>
		<div>
			<label>KAPASITAS PENUMPANG</label>
			<div>
				<input type="number" name="kapasitas" value="<?php echo $dd['kapasitas']?>"/>
			</div>
		</div>
		<div>
			<label>JUMLAH ARMADA</label>
			<div>
				<input type="number" name="jumlah" value="<?php echo $dd['jumlah']?>"/>
			</div>
		</div>
		<div>
			<label>STATUS KETERSEDIAAN</label>
			<div>
				<select name="status">
					<option value="<?php echo $dd['status']?>"><?php echo $dd['status']?></option>
					<option value="TERSEDIA">TERSEDIA</option>
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