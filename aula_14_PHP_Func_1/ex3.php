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
        function Soma(){
          $p = func_get_arg();
          $t = func_num_args();
          $soma = 0;
          for ($i=0; $i < $t ; $i++) { 
            $soma += $p[$i]; 
            return $soma;
          }
        }
        $bla = Soma(12,34,54,6,76,3);
        echo "$bla";
    ?>
</div>
</body>
</html>
 