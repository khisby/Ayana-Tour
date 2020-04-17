<?php
	if(!empty($dd['pembayaran'])){?>
		<img src="<?php echo $dd['pembayaran']?>" alt="GAMBAR PEMBAYARAN" class="gambar"/>
	<?php }else{
		echo "PEMESAN BELUM MENGIRIM PEMBAYARAN";
	}
?>