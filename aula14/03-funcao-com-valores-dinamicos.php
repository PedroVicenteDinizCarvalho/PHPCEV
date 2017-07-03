<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rotina com Parâmetros Dinâmicos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php
			$res=soma(1, 2, 3, 4, 5, 6, 12);
			function soma(){
				$p=func_get_args();
				$t=func_num_args();
				$s=0;
				echo "A soma dos valores: <br/>";
				for($i=0;$i<$t;$i+=1){
					echo " $p[$i]";
					$s+=$p[$i];
				}
				return $s;
			} 
			echo "<br/> é = $res";
		?>
	</div>
</body>
</html>