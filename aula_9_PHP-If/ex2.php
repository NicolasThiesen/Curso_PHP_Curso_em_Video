<!DOCTYPE html>
<html>
<head>
    <?php
        $nota1 =(float) $_POST["nota1"];
        $nota2 = (float) $_POST["nota2"];
        $media = ($nota1+$nota2)/2;
        if ($media>=7){
            $cor = "#329515";
            $situacao = "Aprovado";
        }
        else{
            $cor = "#ff0000";
            $situacao = "Reprovado";
        }
    ?>
    <style>
      span.texto{
        color: <?php echo $cor; ?>
      }
    </style>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    echo "A media do aluno eh de:<span class='texto'>$media</span>. Situacao do aluno:<span class='texto'>$situacao</span>";
    ?>
</div>
</body>
</html>
 