<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Voto com estruturas de condição aninhadas</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php
			$nome=isset($_GET["nome"])?$_GET["nome"]:"Nome não Informado";
			$a=isset($_GET["ano"])?$_GET["ano"]:"Não Informado";
			$i=date("Y")-$a;
		?>
</head>
<body>
	<div class="Container">
		<?php 
			echo "Ola $nome! Bem vindo a consulta de voto <br/>";
			if($i<16){
				$v="Você ainda não vota";
			}
			elseif(($i>=16 && $i<18) || ($i>65)){
				$v="Seu voto é facultativo";
			}
				else{
					$v="Seu voto é obrigatório";
				}
			echo "Você tem $i anos sendo asssim <br/>";
			echo "$v";
		?>
	</div>
	<a href="exercicio02.html">Voltar</a>
</body>
</html>