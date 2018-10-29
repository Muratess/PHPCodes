<!DOCTYPE html>
<html>
<head>
	<title>Estrutura Switch</title>
</head>
<body>

<h2>Aula 05 - Estrutura Switch</h2>

<?php

$valor = @$_POST['v1'];

switch ($valor) {
	case '1':
		echo "Digitei valor 1";
		break;

	case '2':
		echo "Digitei o valor 2";
		break;

	case '3':
		echo "Digitei o valor 3";
		break;
	
	default:
		echo "Valor incorreto";
		break;
}


?>
<form method="post" action="switch.php">

	Valor<input type="text" name="v1">
	<input type="submit" name="Enviar">

</form>
<hr>
<h3>Comando rand</h3>
<?php

$numero = rand(1,10);

echo $numero;





?>
</body>
</html>