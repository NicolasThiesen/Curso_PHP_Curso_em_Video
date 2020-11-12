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
        $nome = isset($_POST["nome"])?$_POST["nome"]:"nao informado";
        $nasc = isset($_POST["ano"])?$_POST["ano"]:"nao informado";
        $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"nao informado";
        if ($nasc==="nao informado"){
            echo "Erro: Parametros nao passados";
        }
        else{
            $idade = date("Y")-$nasc;
            echo "Ola $nome";
            if ($sexo==="Feminino"){
                echo " prazer em conhece-la!";
            }
            else{
                echo " prazer em conhece-lo!";
            }
            echo " Voce tem $idade anos de idade.";
        }
    ?>
</div>
</body>
</html>
 