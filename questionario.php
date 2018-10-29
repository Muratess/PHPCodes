<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="https://wallpapercave.com/wp/R3CF5u0.jpg">
	<center>
	<font color="darkred"><h1>Questionário Silent Hill</h1></font>
		<fieldset style="background-color: white; width: 65%">
			<form method="POST">
				1. O que acontece quando a tal famosa sirene é disparada no decorrer da história do jogo?<p>
				<input type="radio" name="q1" value="1"> Para informar que os bombeiros estavam chegando.<p>
				<input type="radio" name="q1" value="2"> Toque de recolher.<p>
				<input type="radio" name="q1" value="3"> Corre negada.<p>
				<input type="radio" name="q1" value="4"> Acidente nuclear.<p>
				<input type="radio" name="q1" value="5"> Transição de mundos paralelos.<p>

				2. Qual é o nome da cidade real na qual Silent Hill se inspirou?<p>
				<input type="radio" name="q2" value="1"> Springfield.<p>
				<input type="radio" name="q2" value="2"> Centralia.<p>
				<input type="radio" name="q2" value="3"> New Jersey.<p>
				<input type="radio" name="q2" value="4"> Silent Hill.<p>
				<input type="radio" name="q2" value="5"> Sidney.<p>

				3. Qual é o estilo de jogo de Silent Hill?<p>
				<input type="radio" name="q3" value="1"> Infantil.<p>
				<input type="radio" name="q3" value="2"> Survival Horror.<p>
				<input type="radio" name="q3" value="3"> Ação.<p>
				<input type="radio" name="q3" value="4"> Musical.<p>
				<input type="radio" name="q3" value="5"> Survival.<p>

				4. Por que em certas partes do game, uma cadeira de rodas aparece, tanto andando sozinha quanto parada?<p>
				<input type="radio" name="q4" value="1"> Por que o capiroto estava lá.<p>
				<input type="radio" name="q4" value="2"> Por que representava as pessoas que eram paraplégicas e sofreram as ações do culto de Silent Hill.<p>
				<input type="radio" name="q4" value="3"> Por que a pessoa era paraplégica e se curou de tanto medo e saiu correndo e deixou a cadeira para trás.<p>
				<input type="radio" name="q4" value="4"> Representava a cadeira de rodas de Alessa quando estava no hospital.<p>
				<input type="radio" name="q4" value="5"> Se o personagem se cansasse, a cadeira estaria lá para ele recuperar a vida e descansar.<p>

				5. Quem é o suposto protagonista do Novo Silent Hills?<p>
				<input type="radio" name="q5" value="1"> Tiririca<p>
				<input type="radio" name="q5" value="2"> Daryl<p>
				<input type="radio" name="q5" value="3"> Chryl<p>
				<input type="radio" name="q5" value="4"> Daniel Redcliff<p>
				<input type="radio" name="q5" value="5"> Norman Reedus<p>

				<button name="btn">Confirmar</button>
			</form>
		</fieldset>
	</center>
 <fieldset style="background-color:white">
 <center>
<?php

	
	$total = 0;

	$q1 = @$_POST['q1'];	
	$q2 = @$_POST['q2'];
	$q3 = @$_POST['q3'];
	$q4 = @$_POST['q4'];
	$q5 = @$_POST['q5'];
	
	switch ($q1) {
		case '5':
			$total = $total + 1;
			break;
		
		default:
			# code...
			break;
	}

	switch ($q2) {
		case '2':
			$total = $total + 1;
			break;
		
		default:
			# code...
			break;
	}

	switch ($q3) {
		case '2':
			$total = $total + 1;
			break;
		
		default:
			# code...
			break;
	}

	switch ($q4) {
		case '4':
			$total = $total + 1;
			break;
		
		default:
			# code...
			break;
	}

	switch ($q5) {
		case '5':
			$total = $total + 1;
			break;
		
		default:
			# code...
			break;
	}

	echo 'Sua pontuação foi <font color = "red">'.$total.'</font><br>';

	if ($total >= 3) {
		echo "Aprovado no teste!";
	}elseif ($total < 3) {
		echo "Reprovado no teste!";
	}
?>
</center>
</fieldset>
</body>
</html>