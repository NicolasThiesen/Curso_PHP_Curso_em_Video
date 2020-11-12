<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="post" action="ex1_parte2.php">
		<?php
			$i = 1;
			while($i<=5){
				echo "Valor $i<input type='number' name='n$i' min='0' max='100'><br/>";
				$i++;
			}
		?>
		<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>
 