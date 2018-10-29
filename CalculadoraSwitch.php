<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<table border="1">
<tr>
	<td>
	<center>Calculadora</center><br>
		<?php

			$numero1 = @$_POST['numero1'];
			$numero2 = @$_POST['numero2'];
			$funcao = @$_POST['funcao'];

			switch ($funcao) {

				case $funcao == '+':
					$total = $numero1 + $numero2;
					break;

				case $funcao == '-':
					$total = $numero1 - $numero2;
					break;
				
				case $funcao == '/':
					$total = $numero1 / $numero2;
					break;
				case $funcao == '*':
					$total = $numero1 * $numero2;
					break;
				
				default:
					echo "Erro";
					break;
			}
				echo "Valor Total da operação: ".$total;
		?>

		<form method="POST" action="CalculadoraSwitch.php">
		
		Numero 1: <input type="number" name="numero1"><p>
		
		<center>
		<select>

			<option name="funcao" value="+">+</option>
			<option name="funcao" value="-">-</option>
			<option name="funcao" value="/">/</option>
			<option name="funcao" value="*">*</option>

		</select><p>
		Numero 2: <input type="number" name="numero2"><p>
		<input type="submit" name="Enviar">
		</form>
		</center>
	</td>
</tr>
</table>
</center>
</body>
</html>