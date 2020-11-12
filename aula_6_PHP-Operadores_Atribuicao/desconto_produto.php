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
        $valor =$_GET["a"];
        echo "O valor do produto eh R$".number_format($valor,2,",",".");
        $valor=$valor+($valor/10);
        echo "<br/>O valor com 10% de aumento:R$".number_format($valor,2,",",".");
    ?>
</div>
</body>
</html>
 