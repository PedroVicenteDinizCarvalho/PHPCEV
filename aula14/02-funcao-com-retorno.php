<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Funções com Retorno no Corpo Principal PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			function soma($a, $b){
				$s=$a+$b;
				return $s;
			}
		?>
</head>
<body>
	<div class="Container">
		<?php 
			$x=3;
			$y=5;
			$r=soma($x, $y);
			echo "A soma entre $x e $y é $r <br/>";
			echo "Segunda soma com valores vindos de formulário <br/>";
			$v1=isset($_GET["v1"])?$_GET["v1"]:0;
			$v2=isset($_GET["v2"])?$_GET["v2"]:0;
			$res=soma($v1, $v2);
			echo "A soma dos valores $v1 e $v2 é $res";
		?>
	</div>
		<a href="02-funcao-com-retorno.html">Voltar</a>	
</body>
</html>