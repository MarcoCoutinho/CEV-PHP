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
    			$frase = "Eu vou estudar PHP";
    			$cont = str_word_count($frase, 0);//0(conta palavras), 1(cria string por palavra) ou 2(cria string por letra)
    			echo "$cont";
		    ?>
		</div>
	</body>
</html>
 