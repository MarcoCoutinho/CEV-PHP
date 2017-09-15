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
        		$d = isset($_GET["ds"])? $_GET["ds"]: 0;
        		switch ($d) {
        			case '1':
        				echo "Levanta e vai estudar";
        				break;
        			case '2':
        				echo "Levanta e vai estudar";
        				break;
        			case '3':
        				echo "Levanta e vai estudar";
        				break;
        			case '4':
        				echo "Levanta e vai estudar";
        				break;
        			case '5':
        				echo "Levanta e vai estudar";
        				break;
        			case '6':
        				echo "Levanta e vai estudar";
        				break;
        			case '7':
        				echo "Descanse pequeno gafanhoto";
        				break;
        			case '8':
        				echo "Descanse pequeno gafanhoto";
        				break;
        			default:
        				echo "Dia da semana inválido";
        				break;
        		}
        		
		    ?>

		    <br /><a href="javascript:history.go(-1)" class="botao">Voltar</a>

		</div>
	</body>
</html>
 