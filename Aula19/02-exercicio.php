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
					var_dump($v);
					array_push($v, " ");
					var_dump($v);
					array_pop($v);
					var_dump($v);
					array_unshift($v, "#");
					var_dump($v);
					array_shift($v);
					var_dump($v);
			    ?>
			</pre>
		</div>
	</body>
</html>
 