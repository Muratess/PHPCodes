<!DOCTYPE html>
<html>
<head>
	<title>Média Aritimética</title>
</head>
<body>
	<center>
		<fieldset style="width:50%">
			<h1>Média</h1>

			<form method="post" action="">
				
			Nota 1: <input type="text" name="nota1"><p>
			Nota 2: <input type="text" name="nota2"><p>
			<input type="submit" name="Enviar">	
			</form>

			<?php
			if (isset($_POST['Enviar'])):
				$nota1 = @$_POST['nota1'];
				$nota2 = @$_POST['nota2'];
				$media = ($nota1 + $nota2)/2;

			echo "A média é: " . $media;

			endif;
			?>
		</fieldset>
	</center>
</body>
</html>