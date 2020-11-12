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
        $n1=$_GET["nota1"];
        $n2 = $_GET["nota2"];
        $media = ($n1+$n2)/2;
        echo "A situacao do aluno:".(($media<7)?"Recuperacao":"Aprovado");
        
    ?>
</div>
</body>
</html>
 