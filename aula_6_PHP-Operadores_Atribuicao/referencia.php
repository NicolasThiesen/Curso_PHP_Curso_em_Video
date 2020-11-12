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
        $a = 3;
        $b = &$a;
        $a+= 5;
        echo "A vale:$a<br/> B vale:$b";
    ?>
</div>
</body>
</html>
 