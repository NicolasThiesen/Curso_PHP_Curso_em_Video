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
        $nasc = $_POST["ano_nasc"];
        $idade = date("Y")-$nasc;
        if ($idade>17){
        	if ($idade>65) {
        		echo "Seu voto nao eh obrigatoria e voce pode dirigir";	
        	}
        	elseif ($idade>15 && $idade<18) {
        		echo "Seu voto nao eh obrigatoria e voce nao pode dirigir";		
        	}
        	else{
        		echo "Seu voto eh obrigatoria e voce pode dirigir";
        	}
        }
        else{
        	echo "Seu voto nao eh obrigatorio e voce nao pode dirigir";
        }
    ?>
</div>
</body>
</html>
 