<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Icontp2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php
			$i=isset($_GET["v1"])?$_GET["v1"]:0;
			$fc=isset($_GET["v2"])?$_GET["v2"]:0;
			$inc=isset($_GET["ic"])?$_GET["ic"]:1;
		?>
</head>
<body>
	<div class="Container">
		<?php
			if($i<$fc){
				while($i<=$fc){
					echo $i;
					$i+=$inc;
				}
			}
			else{
				while($i>=$fc){
					echo $i;
					$i-=$inc;
				}
			}
		?>
	</div>	
</body>
</html>