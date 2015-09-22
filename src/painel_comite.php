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
$usuario = unserialize($_SESSION["membro_comite"]) or die("Você não está autorizado a ver esta página.");

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Painel do Comitê Eleitoral</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <script type="text/javascript">
            
            function pedirMatricula(){
                var matricula = window.prompt("Membro do comitê, confirme sua matrícula se deseja realmente ver os resultados finais:");
                if (matricula == "<?php echo $usuario->getMatricula() ; ?>"){
                    window.location = "resultado_final.php";
                } else{
                    alert("Tá bom. Vou esquecer que você clicou aí.");
                }
            }
        </script>
        
    </head>

    <body style="background: #DCDCDC;"> 

        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h1 class="text-center">Eleições 2015 do Grêmio Estudantil Paulo Freire</h1>
                        <h4 class="text-center">ACESSO À URNA ELEITORAL</h4>
                    </div>
                    
                    <form class="modal-body" method="post" action="urna.php">
                        
                        <div class="form col-md-12 center-block">
                            <div class="form-group">
                                <label>Matrícula do eleitor:</label>
                                <input type="number" name="matricula" class="form-control input-lg" placeholder="Matrícula">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Acessar urna do eleitor</button> 
                                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="pedirMatricula()">Ver resultado final</button>
                                <a href="script/sair.php"><button type="button" class="btn btn-danger btn-lg btn-block">Sair</button></a>
                            </div>
                        </div>
                        
                    </form>
                    
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
