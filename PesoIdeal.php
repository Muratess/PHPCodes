<!DOCTYPE html>
<html>
<head>
	<title>Peso Ideal</title>
</head>
<body>
<center>
<fieldset style="width:50%">
	<h1>Peso Ideal</h1>
	<form method="POST" >
		<select>
			<option name="sexo" value="1">M</option>
			<option name="sexo" value="2">F</option>
		</select>
		Altura: <input type="text" name="altura"><p>
		Peso
		<button type="submit" name="button">Calcular</button>
	</form>
		<?php

		$sexo = @$_POST['sexo'];
		$altura = @$_POST['altura'];

		if ($sexo == 1) {
			echo "O peso ideal é: " . ((72.7 * $altura) - 58);
		} else {
			echo "O peso ideal é: " . ((62.1 * $altura) - 44.7);
		}
		
	?>
</fieldset>
</center>


</body>
</html>