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
        $n1=$_GET["a"];
        $n2 = $_GET["b"];
        $op =(string) $_GET["op"];
        $r =($op=="soma")?$n1+$n2:"Operacao nao identificada";
        echo "Operacao:$op. O resultado da operacao eh:$r";
        
    ?>
</div>
</body>
</html>
 