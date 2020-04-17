<?php
	include "admin/config.php";
?>
<!DOCTYPE html>
<head>
	<title>PARIWISATA</title>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/header.css"/>
	<link rel="stylesheet" href="css/footer.css"/>
	<link rel="stylesheet" href="css/frm.css"/>
	<link rel="stylesheet" href="css/column.css"/>
	<link rel="stylesheet" href="css/responsive.css"/>
</head>
<body>
<div id="bungkus">
	<?php
		if(isset($_SESSION['anggota'])){
			include "header_login.php";
		}else{
			include "header.php";
		}
	?>
	<?php
			if(isset($_GET['p'])){
				if($_GET['p']=='beranda'){
					include "banner.php";
				}
			}else{
				include "banner.php";
			}
	?>
	<div id="content">
		<?php
			if(isset($_GET['p'])){
				$p = $_GET['p'];
				include "$p.php";
			}else{
				include "beranda.php";
			}
		?>
	</div>
	<?php
		include "footer.php";
	?>
</div>
</body>
</html>

<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script>
		$("#tgl").datepicker();
		
		$(function(){
			$("#banner > div:gt(0)").hide();
			setInterval(function(){
				$("#banner > div:first").fadeIn(1000).next().fadeOut(1000).end().appendTo("#banner");
			},3000);
		});
</script> 