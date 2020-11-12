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
        echo "Tabuada de $n:<br/>";
        for ($i=1; $i <=10 ; $i++) { 
        	echo "$n x $i = ".($n*$i)."<br/>";
        }
    ?>
    <p><button onclick="window.location.href='http://localhost/curso_PHP/aula_13_PHP/ex1.html'">Voltar</button></p>
</div>
</body>
</html>
 