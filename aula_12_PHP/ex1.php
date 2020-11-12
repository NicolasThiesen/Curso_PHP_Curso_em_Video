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
        $n = $_POST["n"];
        $fatorial = 1;
        echo "O fatorial de $n eh:";
        do{
        	$fatorial = $fatorial*$n;
        	$n--;
        }while($n>=1);
        echo "$fatorial";
    ?>
    <p><button onclick="window.location.href='http://localhost/curso_PHP/aula_12_PHP/ex1.html'">Voltar</button></p>
</div>
</body>
</html>
 