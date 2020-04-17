<h3>HALAMAN DAFTAR KOMENTAR</h3>
<table class="tbl">
  <tr>
    <td>EMAIL</td>
    <td>TGL</td>
    <td>HALAMAN</td>
    <td>KOMENTAR</td>
    <td>AKSI</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_komentar order by tgl desc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['email']?></td>
    <td><?php echo $dd['tgl']?></td>
    <td><?php 
	
		$artikel = $dd['id_artikel'];
		$qaa = mysql_query("SELECT * FROM tbl_artikel where id_artikel=$artikel");
		$daa = mysql_fetch_array($qaa);
		echo $daa['nama'];
	
	?>
	    <td><?php echo $dd['ket']?></td>
	
	</td>
    <td><a href="a_komentar.php?hal=hapus&id=<?php echo $dd['id_komentar']?>" onclick="return configm('Apakah anda yakin akan menghapus komentar ini?')">hapus </a></td>
  </tr>
<?php
}
?>
</table>
