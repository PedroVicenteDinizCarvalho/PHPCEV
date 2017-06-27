<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Estilo com formulário PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		$txt=isset($_GET["t"])?$_GET["t"]:"Texto não Digitado";
		$tam=isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
	<style>
		span.texto{
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
	<div class="Container">
		<?php
			echo "<span class='texto'>$txt</span>";
		?>
	</div>
	<a href="03exercicio.html">Voltar</a>	
</body>
</html>