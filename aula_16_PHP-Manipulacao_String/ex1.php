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
    	$prod = "leite";
    	$preco = 5.70;
    	$marca = "ninho";
    	printf("O %s da marca %s custa R$ %.2f <br/>",$prod,$marca,$preco);
    	$v = array(1,325,76,45,2,24);
    	print_r($v);
    	echo "<br/>";
    	var_dump($v);
    	echo "<br/>";
    	var_export($v);
    	echo("<br/>");
    	$bla = "Este texto eh um texto representativo para aula do curso de php da aula 16 que quebrara as linhas de forma que podera ser alterada a quantidade de caracteres por linha.";
    	$r = wordwrap($bla,30,"<br/>");
    	echo($r);
    	echo (strlen($bla))."<br/>";
    	$frase = "Ola mundo";
    	$cound = str_word_count($frase,0);//conta quantas palavras tem na frase
    	$cound = str_word_count($frase,1);//gera um array com todas as palavras
    	$cound = str_word_count($frase,2);//gera array com todas as palavras com as posicoes iguais a da variavel 
    	$count = explode(" ", $frase);//gera um array das palavras separado pelo espaco
    	$count = str_split($frase);//faz um array de todas as letras
    	$texto = implode("#",$count);//coloca # na separacao dos componentes do array
    ?>
</div>
</body>
</html>
 