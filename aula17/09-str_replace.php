<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Str_replace PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$frase="Gosto de estudar programação!!!";
			$novafrase=str_replace("programação", "PHP", $frase);
			echo $novafrase;
			$novafrase2=str_ireplace("Programação", "PHP", $frase);
			echo "<br/> $novafrase2";
		?>
	</div>
</body>
</html>