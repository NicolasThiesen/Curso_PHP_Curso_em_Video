<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		$i = 1;
		while ($i<=5) {
			$get = "n".$i;
			$$get = $_POST["$get"];
			$nome = $$get;
			echo "Valor $i: $nome<br/>";
			$i++;
		}
	?>
</div>
</body>
</html>
 