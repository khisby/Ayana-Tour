<?php
if(isset($_SESSION['anggota'])){
$anggota = $_SESSION['anggota'];
$aa = mysql_query("SELECT * from tbl_anggota where email='$anggota'");
$daa = mysql_fetch_array($aa);
}
?>
<?php
	if(isset($_GET['c'])){ ?>
		<h3>HASIL PENCARIAN ANDA</h3>
	<?php }
?>
<div id="ccl">
	<?php
		if(isset($_GET['c'])){
			$c =$_GET['c'];
			$qc = mysql_query("SELECT * FROM tbl_artikel WHERE `nama` LIKE '%$c%'");
			$hhh = mysql_num_rows($qc);
			if($hhh == 0){
				$qcc = mysql_query("SELECT * FROM tbl_artikel  WHERE `nama` LIKE '$c%'");
				$hhh = mysql_num_rows($qcc);
				if($hhh == 0){
					$qqq = mysql_query("SELECT * FROM tbl_artikel WHERE `nama` LIKE '%$c'");
					$hhh = mysql_num_rows($qqq);
				}else{
					$qqq = $qcc;
				}
			}else{
				$qqq = $qc;
			}
		}else{
			$qqq = mysql_query("SELECT * FROM tbl_artikel order by tgl desc limit 7");
			$hhh = mysql_num_rows($qqq);
		}
		
		if($hhh == 0){
			echo "Tidak ditemukan artikel yang ada cari";
		}else{
			
		while($ddd = mysql_fetch_array($qqq)){
	?>
		<a href="index.php?p=detail_artikel&id=<?php echo $ddd['id_artikel']?>">
			<div class="box">
				<img src="admin/<?php echo $ddd['gambar']?>" alt="gambar"/>
				<div>
					<span><?php echo $ddd['nama']?></span>
				</div>
			</div>
		</a>
	<?php }  } ?>
	
</div>

<?php
	if(!isset($_GET['c'])){

?>
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

<?php }?>