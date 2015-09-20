<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title> Urna eleitoral </title>
		<style>
			
			body{background: #DCDCDC;}

			#urna{
				margin: auto;
				margin-top: 1%;
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

			#n1, #n2, #n3, #n4, #n5, #n6, #n7, #n8, #n9{
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
				text-decoration: none;
				color: white;
				line-height: 150%;
				vertical-align: middle;
			}
			
			#n0{
				/*margin: auto;*/
				margin-left: 35%;
				width: 27%;
				background: black;
				height: 80px;
				border-radius: 3%;
				box-shadow: 3px 3px 0px -1px #696969;
				border: 1px solid #696969;
				font-size: 320%;
				text-align: center;
				text-decoration: none;
				color: white;
				line-height: 150%;
				vertical-align: middle;
			}

			#pai-n0{
				float: left;
				width: 100%;
				background: black;
				height: 80px;
				margin-top: 5%;
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
				color: black;
				font-size: 110%;
				text-align: center;
				text-decoration: none;
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
