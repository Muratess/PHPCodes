<!DOCTYPE html>
<html>
<head>
	<title>Reajuste Salarial</title>
</head>
<body>
	<center>
		<h1>Reajuste Salarial</h1>
		<fieldset style="width:50%">
			<form method="POST">
				Salário: <input type="text" name="salario"><p>
				<button name="button" type="">Enviar</button>
			</form>
			

				<?php

				$salario = @$_POST['salario'];

				if ($salario <= 300) {
					echo "Salário atual: " . (($salario * 50 )/100) ;
				} else {
					echo "Salário atual: " . (($salario * 30)/100) ;
				}
				
		 		?>
	 	</fieldset>
	</center>
</body>
</html>