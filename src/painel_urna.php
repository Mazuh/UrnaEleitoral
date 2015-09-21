<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title> Urna eleitoral </title>
		<link rel="stylesheet" href="urna.css" type="text/css">
	</head>

	<body>
		<div id="urna">
			<div id="tela-urna">
				<?php 
					$id = 1;
					
					if (!isset($_GET['voto'])) {
						echo "<h1>Vote no seu candidato!</h1>";
			
					} else {
						$voto = $_GET['voto'];
						echo "<h3>Seu voto para:</h3>";

						if ($voto == 1) {
							echo "<h4>Chapa: Super Ação</h4>";
							echo "<h4>Presidente: Samara</h4>";
							echo "<img src='/img/superacao.png' alt='chapa1'/>";
							echo "<h4>Aperte CONFIRMAR para efetuar seu voto!</h4>";
			
						} elseif ($voto == 2) {
							echo "<h4>Chapa: IAE </h4>";
							echo "<h4>Presidente: Fabrício</h4>";
							echo "<img src='/img/iae.png' alt='chapa2'/>";
							echo "<h4>Aperte CONFIRMAR para efetuar seu voto!</h4>";

						} else {
							echo "<h4>Chapa: Nulo</h4>";
							echo "<h4>Presidente: Nulo</h4>";
							echo "<img src='/img/nulo.png' id='img-nulo' alt='nulo'/>";	
							echo "<h4>Aperte CONFIRMAR para efetuar seu voto!</h4>";
						}
												
					}
					
					echo (!isset($_GET['valor']))?"":"<h2>Voto computado com sucesso!</h2>";


				?>
			</div>
			<div id="tela-botoes">

				<a href="verificarvoto.php?voto=1"><button type="submit" value="1" id="n1">1</button></a>
				<a href="verificarvoto.php?voto=2"><button type="submit" value="2" id="n2">2</button></a>
				<a href="verificarvoto.php?voto=3"><button type="submit" value="3" id="n3">3</button></a>
				<a href="verificarvoto.php?voto=4"><button type="submit" value="4" id="n4">4</button></a>
				<a href="verificarvoto.php?voto=5"><button type="submit" value="5" id="n5">5</button></a>
				<a href="verificarvoto.php?voto=6"><button type="submit" value="6" id="n6">6</button></a>
				<a href="verificarvoto.php?voto=7"><button type="submit" value="7" id="n7">7</button></a>
				<a href="verificarvoto.php?voto=8"><button type="submit" value="8" id="n8">8</button></a>
				<a href="verificarvoto.php?voto=9"><button type="submit" value="9" id="n9">9</button></a>
				
				<!--div que engloba o botão 0-->
				<div id="pai-n0">
					<a href="verificarvoto.php?voto=0"><button type="submit" value="0" id="n0">0</button></a>
				</div>

				<a href="verificarvoto.php?voto=nulo"><button type="submit" value="nulo" id="nulo">Nulo</button></a>
				<a href="urna.php"><button type="submit" value="corrigir" id="corrigir">Corrigir</button></a>
				<a href="<?php echo (!isset($_GET['voto']))?'urna.php':'verificarvoto.php?id='.$id.'&voto=confirmar&valor='.$voto; ?>"><button type="hidden" value="confirmar" id="confirmar">Confirmar</button></a>
			
			</div>
		</div>
		<div class="panel-footer">
            <p>
            	<a href="https://opensource.org/licenses/MIT">MIT License (MIT)</a> 
                	Copyright (c) 2015
                <a href="https://github.com/Mazuh/UrnaEleitoral-GremioIFRNZN">
                    Marcell Guilherme & Yuri Henrique
                </a>
            </p> 
        </div>
	</body>

</html>
