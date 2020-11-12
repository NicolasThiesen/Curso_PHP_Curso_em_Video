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
        $val1 = isset($_POST["n1"])?$_POST["n1"]:0;
        $val2 = isset($_POST["n2"])?$_POST["n2"]:0;
        $operacao = $_POST["tipo"];

        switch ($operacao) {
        	case "pot":
        		$resul = pow($val1, $val2);
        		break;
        	case 'sqrt':
        		$resul1 = sqrt($val1);
        		$resul2 = sqrt($val2);
        		break;
        	case 'soma':
        		$resul = $val1 + $val2;
        		break;
        	case 'sub':
        		$resul = $val1 - $val2;
        		break;
        	case 'mult':
        		$resul = $val1*$val2;
        		break;
        	case 'div':
        		$resul = $val1/$val2;
        		break;
        	default:
        		$resul = "Operacao desconhecida";
        		break;
        }
        if ($operacao === "sqrt"){
        	echo "O resultados sao:<br/>Raiz quadrada de $val1: $resul1<br/>Raiz quadrada de $val2: $resul2";
        } 
        elseif ($operacao==="pot") {
        	echo "O resultado de $val1 elevado a $val2 eh:$resul";
        }
        else{
        	echo "O resultado eh:$resul";
        }
    ?>
    <br/>
    <button onclick="window.location.href='http://localhost/curso_PHP/aula_10_PHP-Switch/ex1.html'">Fazer outra Operacao</button> 
</div>
</body>
</html>
 