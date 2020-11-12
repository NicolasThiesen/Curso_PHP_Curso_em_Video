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
        $n1 =$_POST["n1"];
        $n2 = $_POST["n2"];
        function Soma($n1,$n2){
        	return $n1+$n2; 
        }
        $soma = Soma($n1,$n2);
        echo "$soma";
    ?>
</div>
</body>
</html>
 