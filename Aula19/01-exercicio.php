<!DOCTYPE html>
<html>
	<head>
  		<link rel="stylesheet" href="_css/estilo.css"/>
  		<meta charset="UTF-8"/>
  		<title>Curso de PHP - CursoemVideo.com</title>
	</head>
	<body>
		<div>
			<pre>
	    		<?php
					$v = array("M", "A", "R", "C", "O");
					$tot = count($v);
					echo "O vetor tem $tot elementos.<br />";
					print_r($v);
					var_dump($v);
					var_export($v)
			    ?>
			</pre>
		</div>
	</body>
</html>
 