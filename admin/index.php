<?php
	include "config.php";
?>
<!DOCTYPE html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="../css/main.css"/>
	<link rel="stylesheet" href="../css/header.css"/>
	<link rel="stylesheet" href="../css/footer.css"/>
	<link rel="stylesheet" href="../css/frm.css"/>
	</head>
<body>
<div id="bungkus">
	<?php
		if(isset($_SESSION['admin'])){
			include "header.php";
		}
	?>
	<div id="content">
		<?php
			if(isset($_SESSION['admin'])){
				if(isset($_GET['p'])){
					$p = $_GET['p'];
					include "$p.php";
				}else{
					include "artikel.php";
				}
			}else{
				include "masuk.php";
			}
		?>
	</div>
	<?php
		if(isset($_SESSION['admin'])){
			include "footer.php";
		}
	?>
</div>
</body>
</html>