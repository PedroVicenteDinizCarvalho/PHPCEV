<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Str_repeat PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$txt=str_repeat("PHP",5);
			echo $txt;
			echo "<br/>",(str_repeat("-", 20));
		?>
	</div>	
</body>
</html>