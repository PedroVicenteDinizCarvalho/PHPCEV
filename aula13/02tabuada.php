<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabuada com For</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$v=isset($_GET["num"])?$_GET["num"]:0;
		?>
</head>
<body>
	<div class="Container">
		<?php 
			for($i=1;$i<=10;$i+=1){
				$r=$i*$v;
				echo "$v x $i = $r <br/>";
			}
		?>
	</div>
	<a href="formtabuada.php">Voltar</a>
</body>
</html>