<h3>HALAMAN DAFTAR ANGGOTA</h3>
<table class="tbl">
  <tr>
    <td>EMAIL</td>
    <td>NO HP</td>
    <td>ALAMAT</td>
    <td>AKSI</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_anggota order by email asc");
while($dd = mysql_fetch_array($qq)){
?>
<tr>
    <td><?php echo $dd['email']?></td>
    <td><?php echo $dd['no_hp']?></td>
    <td><?php echo $dd['alamat']?></td>
    <td><a href="a_anggota.php?hal=hapus&id=<?php echo $dd['id_anggota']?>" onclick="return configm('Apakah anda yakin akan menghapus Anggota ini?')">hapus </a></td>
  </tr>
<?php
}
?>
</table>
