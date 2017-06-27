<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PHP do Formulário com mais funções</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$nome=isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";
			$ano=isset($_GET["ano"])?$_GET["ano"]:0;
			$sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[Sem Sexo]";
			$idade=date("Y")-$ano;
			echo "$nome é $sexo e tem $idade anos";
		?>
	</div>
		<a href="02-exercicio.html">Voltar</a>	
</body>
</html>