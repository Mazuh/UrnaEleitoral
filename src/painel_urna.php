<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title> Urna eleitoral </title>
		<style>
			body{background: #DCDCDC;}

			#urna{
				margin: auto;
				margin-top: 2.5%;
				width: 60%;
				background: white;	
				height: 600px;
				border-radius: 1%;
				box-shadow: 5px 5px 5px black;
			}

			#tela-urna{
				position: absolute;
				width: 30%;
				background: #696969;	
				height: 400px;
				border-radius: 1%;
				margin: auto;
				margin-left: 1%;
				margin-top: 3.5%;
				box-shadow: 5px 5px 5px black;
			}
		
			#tela-botoes{
				position: absolute;
				background: black;
				width: 26%;	
				height: 500px;
				margin: right;
				margin-left: 32%;
				margin-top: 3.5%;
				border-radius: 1%;
				box-shadow: 5px 5px 5px #696969;
			}

			#n1, #n2, #n3, #n4, #n5, #n6, #n7, #n8, #n9, #n0{
				float: left;
				width: 27%;
				background: black;
				height: 80px;
				border-radius: 3%;
				box-shadow: 3px 3px 0px -1px #696969;
				margin-top: 5%;
				margin-left: 4%;
				border: 1px solid #696969;
				font-size: 320%;
				text-align: center;
				color: white;
				line-height: 150%;
				vertical-align: middle;
			}

			#gambiarra{
				float: left;
				width: 27%;
				background: black;
				height: 80px;
				border-radius: 3%;
				box-shadow: 3px 3px 0px -1px black;
				border: 1px solid black;
				margin-top: 5%;
				margin-left: 4%;
				
			}

			#nulo, #corrigir, #confirmar{
				float: left;
				width: 27%;
				height: 60px;
				border-radius: 3%;
				box-shadow: 3px 3px 0px -1px white;
				margin-top: 5%;
				margin-left: 4%;
				border: 1px solid #696969;
				font-size: 120%;
				text-align: center;
				vertical-align: middle;
				line-height: 300%;
			}

			#corrigir{
				background: #F60;
			}

			#confirmar{
				background: #3C3;
			}

			#nulo{
				background: #CCC;
			}

		</style>
	</head>

	<body>
		<div id="urna">
			<div id="tela-urna">
			</div>
			<div id="tela-botoes">
				<div id="n1">1</div>
				<div id="n2">2</div>
				<div id="n3">3</div>
				<div id="n4">4</div>
				<div id="n5">5</div>
				<div id="n6">6</div>	
				<div id="n7">7</div>
				<div id="n8">8</div>
				<div id="n9">9</div>
				
				<!--Gambiarra temporária para a tecla 0 ficar centralizada-->
				<div id="gambiarra"> </div>
				<div id="n0">0</div>
				<div id="gambiarra"> </div>

				<div id="nulo">Nulo</div>
				<div id="corrigir">Corrigir</div>
				<div id="confirmar">Confirmar</div>
			</div>
		</div>
	</body>

</html>
