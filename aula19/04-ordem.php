<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sort PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$v=array("A", "J", "M", "X", "K");
			$n=array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"A");
		?>
</head>
<body>
	<div class="Container">
		<pre>
		<?php 
			print_r($v);
			sort($v);
			var_dump($v);
			rsort($v);
			var_dump($v);
			asort($v);
			var_dump($v);
			arsort($v);
			var_dump($v);
			var_dump($n);
			ksort($n);
			var_dump($n);
			krsort($n);
			var_dump($n);

		?>
		</pre>
	</div>	
</body>
</html>