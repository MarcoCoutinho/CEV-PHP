<!DOCTYPE html>
<html>
	<head>
  		<link rel="stylesheet" href="_css/estilo.css"/>
  		<meta charset="UTF-8"/>
  		<title>Curso de PHP - CursoemVideo.com</title>
	</head>
	<body>
		<div>
			<form>			
				<select>
		    		<?php
		        		for($c = 1 ; $c <= 10 ; $c++)
		        		{
		        			echo "<option>$c</option>";
		        		}
				    ?>
				</select>
				<input type="submit" name="tabuada">
			</form>
		</div>
	</body>
</html>
 