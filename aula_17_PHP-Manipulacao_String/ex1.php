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
    	$nome = "NiCoLas MeDeiros ThiesEn";
    	echo "Seu nome eh ".strtolower($nome);//mostra a variavel passando todas as letras em minusculas
        echo "Seu nome eh ".strtoupper($nome);//mostra a variavel com todas as letras em maiusculas
        echo "Seu nome eh ".ucfirst($nome);//mostra a variavel com a primeira letra em maiusculo
        echo "Seu nome eh ".ucwords($nome)//Mostra sempre o comeco de alguma palavra em maiusculo;

    ?>
</div>
</body>
</html>
 