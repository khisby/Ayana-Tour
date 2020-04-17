<table class="tbl">
  <tr>
    <td>TGL</td>
    <td>EMAIL</td>
    <td>PAKET</td>
    <td>TUJUAN</td>
    <td>BERANGKAT</td>
    <td>PROSES</td>
  </tr>
<?php
$qq = mysql_query("SELECT * FROM tbl_transaksi order by tgl desc");
while($dd = mysql_fetch_array($qq)){

$ia = $dd['email'];
$iaa = $dd['no_hp'];
$qa = mysql_query("SELECT * FROM tbl_anggota where email='$ia' and no_hp='$iaa'");
$da = mysql_fetch_array($qa);

$ip = $dd['id_paket'];
$qp = mysql_query("SELECT * FROM tbl_paket where id_paket=$ip");
$dp = mysql_fetch_array($qp);

$it = $dp['id_artikel'];
$qt = mysql_query("SELECT * FROM tbl_artikel where id_artikel=$it");
$dt = mysql_fetch_array($qt);

if(!empty($dd['transportasi'])){
	$itr = $dd['id_transportasi'];
	$qtr = mysql_query("SELECT * FROM tbl_transportasi where id_transportasi=$itr");
	$dtr = mysql_fetch_array($qtr);
}

?>
<tr>
    <td><?php echo $dd['tgl']?></td>
    <td><?php echo $dd['email']?></td>
    <td><?php echo $dp['nama']?></td>
    <td><?php echo $dt['nama']?></td>
    <td><?php echo $dd['berangkat']?></td>
    <td>
		<a href="index.php?p=transaksi&pp=detail&id=<?php echo $dd['id_transaksi']?>">Detail</a>
		<a href="index.php?p=transaksi&pp=trans_t&id=<?php echo $dd['id_transaksi']?>">Transportasi </a>
		<?php 
			if(empty($dd['id_transportasi'])){
			
			}else{?>
				<a href="index.php?p=transaksi&pp=pembayaran&id=<?php echo $dd['id_transaksi']?>">Pembayaran </a>
			<?php }
		?>
		
		<?php 
			if(empty($dd['pembayaran'])){
			
			}else{?>
				<a href="index.php?p=transaksi&pp=tiket&id=<?php echo $dd['id_transaksi']?>">Tiket</a>
			<?php }
		?>
		
		<?php 
			if(!empty($dd['pembayaran'])){
			
			}else{?>
				<a href="index.php?p=transaksi&pp=batal&id=<?php echo $dd['id_transaksi']?>">Batalkan</a>
			<?php }
		?>
		
		
	</td>
  </tr>
<?php
}
?>
</table>
