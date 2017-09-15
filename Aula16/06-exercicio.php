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
    			$nome = "   Marco Antonio Rodrigues Coutinho   ";
    			echo (strlen($nome));
    			$novo = trim($nome );//variações ltri e rtrim
    			echo "$novo";
    			echo (strlen($novo));
		    ?>
		</div>
	</body>
</html>
 