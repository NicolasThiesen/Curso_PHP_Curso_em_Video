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
        $dia = isset($_POST["dia"])?$_POST["dia"]:"Dia nao definido";
        switch ($dia) {
            case 'segunda':
            case 'terca':
            case 'quarta':
            case 'quinta':
            case 'sexta':
                echo "Voce precisa ir a escola";      
                break;
            default:
                echo "Voce  nao precisa ir a escola";
                break;
        }
    ?> 
</div>
</body>
</html>
 