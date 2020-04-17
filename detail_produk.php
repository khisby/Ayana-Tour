<?php
$id = $_GET['id'];
$qq = mysql_query("SELECT * from tbl_paket where id_paket=$id");
$dd = mysql_fetch_array($qq);

if(isset($_SESSION['anggota'])){
$anggota = $_SESSION['anggota'];
$aa = mysql_query("SELECT * from tbl_anggota where email='$anggota'");
$daa = mysql_fetch_array($aa);
}
?>
<h3>HALAMAN DETAIL PAKET PARIWISATA</h3>
<div id="d_a">
	<div>
		<img src="admin/<?php echo $dd['gambar']?>" alt="gambar"/>
	</div>
	<table class="tbl">
			<tr>
				
			</tr>
			<tr>
				<td>NAMA PAKET</td>
			</tr>
			<tr>
				<td><a href="index.php?p=detail_artikel&id=<?php echo $id ?>"><?PHP echo $dd['nama']?></a></td>
			</tr>
			<tr>
				<td>KATEGORI</td>
			</tr>
			<tr>
				<td><?PHP echo $dd['kategori']?></td>
			</tr>
			<tr>
				<td>harga</td>
			</tr>
			<tr>
				<td>Rp.<?PHP echo number_format($dd['harga'])?></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
			</tr>
			<tr>
				<td><?PHP echo $dd['ket']?></td>
			</tr>
			<tr>
				<td>KETEMU</td>
			</tr>
			<tr>
				<td><?PHP echo $dd['ketemu']?></td>
			</tr>
	</table>
</div>


<form action="a_pesan.php" method="get" id="frm">
<h3>FORM PEMESANAN PAKET WISATA</h3>
	<div>
		<label>Email pemesan</label>
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
		<label>No HP</label>
		<div>
			<input type="text" name="no_hp"
					<?php
					if(isset($_SESSION['anggota'])){ ?>
							value="<?php echo $daa['no_hp']?>" readonly
						<?php }?>
			/>
		</div>
	</div>
	<div>
		<label>ALAMAT</label>
		<div>
			<input type="text" name="alamat"
					<?php
					if(isset($_SESSION['anggota'])){ ?>
							value="<?php echo $daa['alamat']?>" readonly
						<?php }?>
			/>
		</div>
	</div>
	<div>
		<label>Nama Paket</label>
		<div>
			<select name="paket">
				<option value="0" hidden selected>PILIH SALAH SATU</option>
				<?php 
					$qqq = mysql_query("SELECT * FROM tbl_paket");
					while($ddd = mysql_fetch_array($qqq)){
				?>
					<option value="<?php echo $ddd['id_paket']?>"><?php echo $ddd['nama']?></option>
				<?php }	?>
			</select>
		</div>
	</div>
	<div>
		<label>TANGGAL KEBERANGKATAN</label>
		<div>
			<input type="text" name="berangkat" id="tgl"/>
		</div>
	</div>
	<div>
		<label>JUMLAH ORANG</label>
		<div>
			<input type="number" name="jumlah" min="1"/>
		</div>
	</div>
	<div>
		<div>
			<input type="submit" value="PROSES PEMESANAN"/>
		</div>
	</div>

</form>