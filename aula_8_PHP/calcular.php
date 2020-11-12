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
        $v1 = $_POST["v1"];
        $v2 = $_POST["v2"];
        $op = $_POST["op"];
        echo "Resultado:";
        if ($op==="+" || $op==="soma"){
        	echo ($v1+$v2);
        }
        elseif ($op==="-"|| $op ==="subtracao") {
        	echo ($v1-$v2);
        }
        elseif ($op==="*"||$op === "multiplicacao" || $op === "x") {
        	echo ($v1*$v2);
        }
        elseif ($op==="/"||$op==="divisao") {
        	echo($v1/$v2);
        }
        elseif ($op==="="||$op==="igual"){
        	if ($v1 === $v2){
        		echo "Os numeros sao iguais";
        	}
        	else{
        		echo "Os numeros nao diferentes";
        	}
        }
        else{
        	echo "Operacao sao detectada";
        }
    ?>
    <br/>
    <a href="_modelohtml.html">Fazer outra operacao</a>
</div>
</body>
</html>
 