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
        $vet = array("nome"=>"Nicolas","sobrenome"=>"Medeiros Thiesen","idade"=>18);
        foreach ($vet as $key => $value) {
        	echo "$key: $value<br/>";
        }
        $globs[3] = 65;
        $globs[5] = 24;
        $globs[6] = 54;
        $globs[] = 45;
    ?>
    <pre>
    	<?php
    		print_r($globs);
    	  ?>
    </pre>
</div>
</body>
</html>
 