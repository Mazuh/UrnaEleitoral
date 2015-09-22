<?php

session_start();

function __autoload($file){
    if(file_exists('class/' . $file . '.php')){
        require_once('class/' . $file . '.php');
    } else{
        exit('O arquivo ' . $file . ' não encontrado.');
    }
}

if (isset($_SESSION["membro_comite"])){
    $admin = unserialize($_SESSION["membro_comite"]);

} else{
    die("Membro do comitê, faça seu login.");
}


$qtdMatriculas = $admin->getQtdMatriculasCadastradas();
$qtdVotosValidos = $admin->getQtdVotosValidos();


$chapas_query = Chapa::getConsulta();
$votos = [];


while ($chapa_res = mysqli_fetch_array($chapas_query)){
    $chapa = new Chapa($chapa_res, null, null);
    
    $identificador = $chapa->getNum() . " - " . $chapa->getNome();
    $valor = MembroComite::getQtdVotosDaChapa($chapa->getNum());
    
    $votos[$identificador] = $valor;
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!--<meta charset="utf-8">-->
        <title>Resultados finais</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body style="background: #DCDCDC;"> 

        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="text-center">Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</h2>
                        
                        <div class="text-center">
                            <img alt="logo-ifrn" src="img/logo-ifrn.png"/>
                        </div>
                        
                        <div>
                        <h4 class="text-center">Relatório de Votação do Grêmio Estudantil Paulo Freire</h4>
                            <ul>
                                <?php
                                echo "<li>Quantidade de matrículas encontradas no sistema: $qtdMatriculas</li>";
                                echo "<li>Quantidade de votos válidos: $qtdVotosValidos</li>";
                                
                                foreach ($votos as $nome => $qtdVotos){
                                    $porcentagem = $qtdVotos / $qtdVotosValidos * 100;
                                    echo "<li>Chapa $nome obteve $qtdVotos votos ($porcentagem% dos válidos)</li>";
                                        
                                }
                                
                                ?>
                            </ul>
                        </div>
                        
                        <div class="text-center">
                            <small><strong><?php echo "Gerado em: ".date("d/m/Y H:i:s"); ?></strong></small>
                        </div>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="panel-footer">
                        <p class="text-center">
                            <a href="https://opensource.org/licenses/MIT">MIT License (MIT)</a> 
                            Copyright (c) 2015
                            <a href="https://github.com/Mazuh/UrnaEleitoral-GremioIFRNZN">
                                Marcell Guilherme & Yuri Henrique
                            </a>
                        </p> 
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
