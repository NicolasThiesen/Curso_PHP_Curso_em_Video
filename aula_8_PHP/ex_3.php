<!DOCTYPE html>
<html>
<head>
    <?php
        $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
        $texto = isset($_POST["text"])?$_POST["text"]:"Texto Generico";
        $tamanho = isset($_POST["tam"])?$_POST["tam"]:"12pt";
    ?>
  <style>
      span.texto{
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>; 
      }
  </style>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$texto</span>";
    ?>
</div>
</body>
</html>
 