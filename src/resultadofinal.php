<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Resultado Final</title>
	</head>

	<body style="background: lightgreen; font-family: Arial;">
		<?php
			#Variáveis temporárias!!! São equivalentes à consulta no banco, pegando o quantidade de votos de cada chapa.
			$qtd_votos_chapa1 = 14;
			$qtd_votos_chapa2 = 12;

			if ($qtd_votos_chapa1 > $qtd_votos_chapa2) {
				echo ("<h1 style='text-align: center;'>A CHAPA 1 VENCEU COM ".$qtd_votos_chapa1." VOTOS!</h1>");
				echo "<img src='css/chapa1.png' alt='superacao' style='width: 80%; height: 500px; margin-left: 10%; margin-top: 5%;'/>";
			
			} else {
				echo ("<h1 style='text-align: center;'>A CHAPA 2 VENCEU COM ".$qtd_votos_chapa2." VOTOS!</h1>");
				echo "<img src='css/chapa2.jpg' alt='iae' style='width: 80%; height: 500px; margin-left: 10%; margin-top: 5%;'/>";
			}
		?>
	</body>
</html>
