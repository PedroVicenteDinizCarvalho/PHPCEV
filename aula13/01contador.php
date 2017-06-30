<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contador com FOR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php 
			for($i=1;$i<=10;$i+=1){
				echo "$i ";
			}
			echo "<br/>";
			for($c=10;$c>=1;$c-=1){
				echo "$c ";
			}
			echo "<br/>";
			for($cont=0;$cont<=100;$cont+=5){
				echo "$cont ";
			}
			echo "<br/>";
			for($i=20;$i>=0;$i-=2){
				print "$i ";
			}			
		?>
	</div>	
</body>
</html>