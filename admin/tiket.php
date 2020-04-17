<?php
	if(!empty($dd['tiket'])){
		echo "KODE TIKET " . $dd['tiket'];
	}else{?>
		<form action="a_tiket.php" method="post" id="frm">
			<input type="hidden" name="hal" value="ubah"/>
			<input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
			<div>
				<label>KIRIM KODE TIKET</label>
				<div>
					<input type="text" name="tiket"/>
					<input type="submit" value="KIRIM"/>
				</div>
			</div>
		</form>
	<?php }
?>

