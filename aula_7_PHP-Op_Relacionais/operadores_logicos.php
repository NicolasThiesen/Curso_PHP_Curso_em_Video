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
        $ano=$_GET["ano"];
        $idade = 2018-$ano;
        echo "Voce tem voto ".(($idade>17 && $idade<65)?"obrigatorio":"nao obrigatorio");
        
    ?>
</div>
</body>
</html>
 