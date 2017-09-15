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
        		$nome = "marco antonio rodrigues coutinho";
        		$nome2 = str_pad($nome, 40, "#", STR_PAD_RIGHT);
        		echo "o $nome2 é lindo";
		    ?>
		</div>
	</body>
</html>
 