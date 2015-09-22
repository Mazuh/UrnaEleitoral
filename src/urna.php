<?php

session_start();

function __autoload($file){
    if(file_exists('class/' . $file . '.php')){
        require_once('class/' . $file . '.php');
    } else{
        exit('O arquivo ' . $file . ' não encontrado.');
    }
}

// auth
if (isset($_REQUEST["eleitor"])){
    // recebeu id do script da urna
    $id_eleitor = $_REQUEST["eleitor"];
    $consulta = Eleitor::getConsulta(intval($id_eleitor)); 
    $res = mysqli_fetch_array($consulta) or die("Acesso negado.");

    $eleitor = new Eleitor($res, null);

}else if(isset($_POST["matricula"])){
    // recebeu matricula da página do comitê
    if ($eleitor_res = Eleitor::getConsultaPorMatricula($_POST["matricula"])){
        // já existe matrícula assim, blz.
        $id_eleitor = $eleitor_res["id"];
        $eleitor = new Eleitor($eleitor_res, null);
    } else{
        // não existe matricula assim, criar!
        $eleitor = new Eleitor(null, $_POST["matricula"]);
        $eleitor->criar();
        $id_eleitor = Eleitor::getConsultaPorMatricula($_POST["matricula"])["id"];
    }
    
}else{
    // o diabo é quem sabe como tu foi parar aqui.
    die("Acesso negado.");
}

// vars
$chapas_candidatas = Chapa::getConsulta();
// já votou?
if (isset($_REQUEST["voto"])){
    $voto = $_REQUEST["voto"];
    if ($voto != -1){
        // verifica o voto não-nulo
        $consulta = Chapa::getConsulta(intval($voto)); 
        $res = mysqli_fetch_array($consulta) or die("Acesso negado.");

        $chapa_votada = new Chapa($res, null);
    } // else voto nulo, mantém constante de nulo
}

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Urna eleitoral</title>
        <link rel="stylesheet" href="css/urna.css" type="text/css">
        <script src="js/urna.js" type="text/javascript"></script>
    </head>

    <body>
        <form id="urna" method="post" action="script/votar.php" onsubmit="return confirma()">
            <?php echo "<input type='hidden' name='eleitor' value='$id_eleitor'/>"; ?>
            <?php echo "<input type='hidden' id='voto' name='voto' value=''/>"; ?>
            
            <div id="tela-urna">
                
                <?php

                echo "<h3 style='text-align: center'>Eleitor ".$eleitor->getMatricula()."<h3>";

                if (isset($voto)){
                    echo "<h1>";
                    if ($voto != -1){
                        // voto não nulo
                        echo "Voto confirmado:<br/>".$chapa_votada->getNome()."</h1>";
                    }else{
                        // script retornou flag de nulo/erro, verificar!
                        if ($eleitor->jaVotou()){ 
                            // então flag foi de erro
                            echo "</h1><p style='text-align: center'><small>Já foi registrado um voto para sua matrícula em<br/>";
                            echo $eleitor->getMomentoVoto() . "</small></p>";
                        }else{
                            // votou nulo mesmo
                            echo "Voto nulo confirmado.</h1>";
                        }
                    }
                    echo "<h2>Sua contribuição é muito importante, obrigado!</h2>";
                    echo "<h4 style='text-align: center'>Aguarde, a página irá expirar em 7 segundos...</h4>";
                    echo "<script>esperarAndRedirecionar()</script>"; // redireciona!
                } else{
                    echo "<h1>Faça sua votação!</h1>";
                    echo "<h2 id='in'>_<h2>";
                }

                ?>
            </div>
            <div id="tela-botoes">

                <button type="button" onclick="digitar(1)" id="n1">1</button>
                <button type="button" onclick="digitar(2)" id="n2">2</button>
                <button type="button" onclick="digitar(3)" id="n3">3</button>
                <button type="button" onclick="digitar(4)" id="n4">4</button>
                <button type="button" onclick="digitar(5)" id="n5">5</button>
                <button type="button" onclick="digitar(6)" id="n6">6</button>
                <button type="button" onclick="digitar(7)" id="n7">7</button>
                <button type="button" onclick="digitar(8)" id="n8">8</button>
                <button type="button" onclick="digitar(9)" id="n9">9</button>

                <!--div que engloba o botão 0 -->
                <div id="pai-n0">
                    <button type="button" onclick="digitar(0)" id="n0">0</button>
                </div>

                <button id="nulo" type="submit" onclick="digitar(0)">Nulo</button>
                <button id="corrigir" type="button" onclick="corrigir()">Corrigir</button>
                <button id="confirmar" type="submit">Confirmar</button>

            </div>
        </form>
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