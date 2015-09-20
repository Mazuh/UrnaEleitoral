<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Painel da Comissão</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <body style="background: #DCDCDC;">

        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">Eleição 2015 do Grêmio Estudantil Paulo Freire<br/>Urna Eletrônica</h1>
                    </div>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" method="post" action="script/cadastrar_eleitor.php">
                            <label>*Cadastrar a matrícula do eleitor no banco de dados</label>
                            <div class="form-group">
                                <input type="number" name="matricula" class="form-control input-lg" placeholder="Matrícula" required/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Cadastrar Matrícula</button> 
                                <button class="btn btn-danger btn-lg btn-block" type="button">Ver votações</button>
                            </div>
                        </form>
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
                </div>
            </div>
        </div>

        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
