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
        $tab = 1;
        echo "Tabuada de $n:<br/>";
        do{
        	$res = $tab*$n;
        	echo "$n x $tab = $res<br/>";
          $tab++;
        }while($tab<=10);
        
    ?>
    <p><button onclick="window.location.href='http://localhost/curso_PHP/aula_12_PHP/ex2.html'">Voltar</button></p>
</div>
</body>
</html>
 