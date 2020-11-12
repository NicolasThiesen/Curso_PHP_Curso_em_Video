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
        for ($i=1; $i <=$n ; $i++) { 
        	if ($n%$i==0 && $i!=1 && $i != $n){
            $primo = 1;
            echo "$n nao eh primo";
            break;
          }
          else{
            $primo = 0; 
          }
        }
        if ($primo===0){
          echo "$n eh primo";
        }
    ?>
    <p><button onclick="window.location.href='http://localhost/curso_PHP/aula_13_PHP/ex2.html'">Voltar</button></p>
</div>
</body>
</html>
 