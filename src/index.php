<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!--<meta charset="utf-8">-->
        <title>Login</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body style="background: #DCDCDC;"> 

        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="text-center">Instituto Federal de Educalção, Ciência e Tecnologia do Rio Grande do Norte</h2>
                        <h1 class="text-center">Sistema de Votação do Grêmio Estudantil Paulo Freire</h1>

                    </div>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" method="post" action="script/logar.php">
                            <div class="form-group">
                                
                                <label class="text-center">Acesso restrito aos membros da Comissão Eleitoral 2015 do grêmio supracitado registrados pela Diretoria do campus. Se você não é um dos mesmos, prosseguir implicará em fraude eleitoral e medidas disciplinares serão tomadas.</label>
                                <input type="number" name="matricula" class="form-control input-lg" placeholder="Digite sua matrícula">
                                <input type="password" name="senha" class="form-control input-lg" placeholder="Digite sua senha de acesso ao sistema">
                                
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg btn-block">Entrar</button> 
                            </div>
                        </form>
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
