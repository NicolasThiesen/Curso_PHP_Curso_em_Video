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
        $ano = $_GET["aa"];
        echo"O ano atual eh $ano.";
        echo"O ano anterior eh ".--$ano;
    ?>
</div>
</body>
</html>
 