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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "A soma vale:".($n1+$n2);
        echo "<br/>A multiplicacao vale:".($n1*$n2);
        echo "<br/>A divisao vale:".($n1/$n2);
        echo "<br/>A subtracao vale:".($n1-$n2);
        echo "<br/>O resto da divisao vale".($n1%$n2);
    ?>
</div>
</body>
</html>
 