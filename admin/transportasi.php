<?php
	if(isset($_GET['id'])){
		include "u_transportasi.php";
	}else{
		include "t_transportasi.php";
	}
?>

<table class="tbl paket">
  <tr>
    <td>NAMA ARMADA</td>
    <td>KAPASITAS</td>
    <td>JUMLAH TERSEDIA</td>
    <td>AKSI</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_transportasi order by nama asc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['nama']?></td>
    <td><?php echo $dd['kapasitas']?></td>
    <td><?php echo $dd['jumlah']?></td>
    <td><a href="index.php?p=ecommerce&pp=transportasi&id=<?php echo $dd['id_transportasi']?>">ubah </a></td>
  </tr>
<?php
}
?>
</table>
