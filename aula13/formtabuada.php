<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabuada com For para gerar options</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<form method="get" action="02tabuada.php">
			<select name="num">
				<?php
					for($i=1;$i<=10;$i+=1){
						echo "Numero: <option value='$i'> $i </option> <br/>";
					}
				?>
			</select>
			<input type="submit" value="Tabuada"/>
		</form>
	</div>	
</body>
</html>