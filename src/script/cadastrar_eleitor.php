<?php
session_start();

$_SESSION["membro_comite"] = "20121044010247"; // DEV TESTS ----------- REMOVER ESTA LINHA DEPOIS DE IMPLEMENTADO LOGIN

// caminhos a qual redirecionar
define("PATH_SEGUINTE", "../painel_comissao.php/");
define("PATH_ACESSO_NEGADO", "../painel_comissao.php/");

if (isset($_POST["matricula"]) && isset($_SESSION["membro_comite"])){ // auth
    
    include "../class/Eleitor.php";
    
    $novo_eleitor = new Eleitor(null, $_POST["matricula"]);
    
    if($novo_eleitor->criar()){
        header("Location: ".PATH_SEGUINTE."?ok="); // passa flag get indicando sucesso
    } else{
        die("Falha ao persistir no banco de dados.");
    }
    
} else{
    header("Location: ".PATH_ACESSO_NEGADO);
}

?>