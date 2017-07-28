<?php

	$Nome = 'Gustavo';
	$Idade = 25;
	$JogoFavorito = "Mass Effect";
	$ImgSrc = "https://data4.origin.com/content/dam/originx/web/app/games/mass-effect/mass-effect-trilogy/mass-effect-trilogy-standard-edition_pdp_3840x2160_en_WW.jpg";
	define('MES', "Novembro");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Gustavo</title>
</head>
<body>
	<div class="content">
		<p>Nome: <?php echo $Nome; ?> </p>
		<p>Idade: <?php echo $Idade; ?> </p>
		<p>Jogo Favorito: <?php echo $JogoFavorito; ?> </p>
		<p>Mes: <?php echo MES; ?> </p>
	</div>
	<div class="masseffect">
		<img src=<?php echo $ImgSrc; ?> />
	</div>
</body>
</html>