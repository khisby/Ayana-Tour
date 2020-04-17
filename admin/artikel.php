<?php
	if(isset($_GET['id'])){
		include "u_artikel.php";
	}else{
		include "t_artikel.php";
	}
	
	
?>

<table class="tbl paket">
  <tr>
    <td>JUDUL</td>
    <td>KATEGORI</td>
    <td>AKSI</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_artikel order by tgl desc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['nama']?></td>
    <td><?php echo $dd['kategori']?></td>
    <td><a href="index.php?p=artikel&id=<?php echo $dd['id_artikel']?>">ubah </a> 
    	<a href="a_artikel.php?hal=hapus&id=<?php echo $dd['id_artikel']?>" onclick="return configm('Apakah anda yakin akan menghapus artikel ini?')">hapus </a></td>
  </tr>
<?php
}
?>
</table>
