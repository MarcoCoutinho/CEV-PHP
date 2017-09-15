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
    			$txt = "Este é um exemplo de uma string gigante criado pelo php que vai mostrar o funcionamento fa função wordwrap!";
    			$res = wordwrap($txt, 20, "<br />\n");
    			echo "$res";
		    ?>
		</div>
	</body>
</html>
 