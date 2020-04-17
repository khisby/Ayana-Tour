<?php
	if(isset($_GET['id'])){
		include "u_paket.php";
	}else{
		include "t_paket.php";
	}
?>

<table class="tbl paket">
  <tr>
    <td>NAMA</td>
    <td>HARGA</td>
    <td>TUJUAN WISATA</td>
    <td>KATEGORI</td>
    <td>AKSI</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_paket order by tgl desc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['nama']?></td>
    <td><?php echo $dd['harga']?></td>
    <td><?php 
		$artikel = $dd['id_artikel'];
		$qt = mysql_query("SELECT * from tbl_artikel where id_artikel=$artikel");
		$ddt = mysql_fetch_array($qt);
		echo $ddt['nama']?>
	</td>
	<td><?php echo $dd['kategori']?></td>
    <td><a href="index.php?p=ecommerce&pp=paket&id=<?php echo $dd['id_paket']?>">ubah </a> 
    	<a href="a_paket.php?hal=hapus&id=<?php echo $dd['id_paket']?>" onclick="return configm('Apakah anda yakin akan menghapus paket ini?')">hapus </a></td>
  </tr>
<?php
}
?>
</table>
