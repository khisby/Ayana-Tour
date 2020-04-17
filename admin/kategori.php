<?php
	include "t_kategori.php";
	
	
?>

<table class="tbl paket">
  <tr>
    <td>JUDUL</td>
    <td>HALAMAN</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_kategori order by nama asc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['nama']?></td>
    <td><?php echo $dd['hal']?></td>
  </tr>
<?php
}
?>
</table>
