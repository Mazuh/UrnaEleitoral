<?php
session_start();

// auth
$usuario = unserialize($_SESSION["membro_comite"]) or die("Você não está autorizado a ver esta página.");

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Cadastrar/Ver votação</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    
    <body style="background: #DCDCDC;"> 

      <!--login modal-->
      <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 class="text-center">Urna Eletrônica Grêmio Paulo Freire - IFRN ZN</h1>
            </div>
            <div class="modal-body">
                <label>Acessar matrícula:</label>
                <div class="form col-md-12 center-block">
                  <div class="form-group">
                    <input type="number" class="form-control input-lg" placeholder="Matrícula">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success btn-lg btn-block">Cadastrar Matrícula</button> 
                    <a href="resultadofinal.php"><button class="btn btn-danger btn-lg btn-block">Ver resultado final</button></a>
                  </div>
                </div>
            </div>
            <div class="panel-footer">
                <p>Marcell Guilherme & Yuri Sales 2015</p>  
            </div>
        </div>
        </div>
      </div>
    
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </body>

</html>
