<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vetor com chaves personalizadas PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<pre>
			<?php 
				$n=array(1=>"A",
						 0=>"B", 
						 3=>"C", 
						 4=>"D", 
						 6=>"E");
				$n[]="F";
				unset($n[0]);
				print_r($n);
				foreach($n as $v){
					echo "$v ";
				}
			?>
		</pre>
	</div>
</body>
</html>