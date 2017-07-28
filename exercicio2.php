<?php
	$newArray = array(
		"Nome" => "Gustavo",
		"JogoFavorito" => "Mass Effect",
		"Idade" => 25,
		);

	function sumPowers($a, $b)
	{
		return ($a ** 2) + ($b ** 2);
	}
?>

<html>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Gustavo de Novo</title>
</head>
<body>
	<div>
		<p> 	
			<?php
				foreach($newArray as $key => $value)
				{
				echo "<p><b>$key</b> : $value </p>";
				}
			?>
		</p>
	</div>

	<div>
		<p><h4> var_dump sem pre </h4> </p>

		<?php
			var_dump($newArray);
		?>
	</div>

	<div>
		<p><h4> var_dump usando pre </h4> </p>
		<p>
		<pre>
			<?php
			
				var_dump($newArray);
			
			?>
		</pre>
		</p>
	</div>

	<div>
		<p><h2>2 * 2 + 4 * 4 </h2></p>
		<p>= 
		<?php
			echo sumPowers(2, 4);
		?>
	</p>
	</div>
</body>
</html>	