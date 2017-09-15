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
    			$vetor[0] = "Marco";
    			$vetor[1] = "Antonio";
    			$vetor[2] = "Rodrigues";
    			$vetor[3] = "Coutinho";
    			$texto = implode("#", $vetor);
    			print($texto);
		    ?>
		</div>
	</body>
</html>
 