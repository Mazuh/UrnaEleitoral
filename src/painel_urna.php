<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title> Urna eleitoral </title>
		<link rel="stylesheet" href="painel_urna.css" type="text/css">
	</head>

	<body>
		<div id="urna">
			<div id="tela-urna">
			</div>
			<div id="tela-botoes">
				<form method="post">
					<button type="submit" value="1" id="n1">1</button>
					<button type="submit" value="2" id="n2">2</button>
					<button type="submit" value="3" id="n3">3</button>
					<button type="submit" value="4" id="n4">4</button>
					<button type="submit" value="5" id="n5">5</button>
					<button type="submit" value="6" id="n6">6</button>
					<button type="submit" value="7" id="n7">7</button>
					<button type="submit" value="8" id="n8">8</button>
					<button type="submit" value="9" id="n9">9</button>
					
					<!--div que engloba o botão 0-->
					<div id="pai-n0">
						<button type="submit" value="0" id="n0">0</button>
					</div>
				</form>

				<form method="post">
					<button type="submit" value="nulo" id="nulo">Nulo</button>
					<button type="submit" value="corrigir" id="corrigir">Corrigir</button>
					<button type="submit" value="confirmar" id="confirmar">Confirmar</button>
				</form>
			</div>
		</div>
	</body>

</html>
