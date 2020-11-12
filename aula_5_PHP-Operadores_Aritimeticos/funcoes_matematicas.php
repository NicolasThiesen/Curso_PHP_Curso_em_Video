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
        echo "Valores recebidos:$n1 e $n2";
        echo "<br/>Os valores absolutos dos numeros sao:".abs($n1)." e ".abs($n2);
        echo "<br/> A potenciacao de $n1 <sup>$n2</sup>:".pow($n1,$n2);
        echo "<br/> A raiz quadrada de $n1:".sqrt($n1);
        echo "<br/>O valor arredondado de $n1:".round($n1);// ceil (sempre arredonda pra cima); floor (sempre arrendonda pra baixo)
        echo "<br/>A parte inteira de $n2: ".intval($n2);
        echo "<br/>O valor de $n1 em moeda:R$".number_format($n1,2,",",".");    ?>
</div>
</body>
</html>
 