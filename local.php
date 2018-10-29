<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lightblue">
	<center>
	<fieldset style="background-color: white">
		<legend>Data e horas atuais</legend>
	<?php

		echo "Data atual: ";
		echo date('d/m/Y') . "</br></br>";
		echo "Horário atual: ";
		echo date('H:i:s');

	?>
	</fieldset>
	</center>

</body>
</html>