<!DOCTYPE html>
<html>
<head>
	<title>Divisores</title>
</head>
<body>
	<center>
	<fieldset style="width:30%;">
	<form method="post" action="divisores.php">
		<h1>Número 1:</h1><br>
		<input type="number" name="n1">
		<input type="submit" name="enviar">
	</form><p>
	
	<?php 
	$d = @$_POST[n1];
	echo "Multiplos de ". $d ."<p>";
		function divisores($d){
			for ($i=1; $i <= $d; $i++) { 

				if ($d % $i == 0) {
					echo "$i é divisor de $d.<p>\n";

					}
				}

			}
		
	divisores($d);
		

	 ?>
	 </fieldset>
	 </center>
</body>
</html>