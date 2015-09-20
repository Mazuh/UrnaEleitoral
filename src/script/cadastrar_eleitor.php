<?php
session_start();

$_SESSION["membro_comite"] = "20121044010247"; // DEV TESTS ----------- REMOVER ESTA LINHA DEPOIS DE IMPLEMENTADO LOGIN


// cabeçalhos com caminhos a qual redirecionar, com possívels flag get
const H_SUCESSO = "location: ../painel_comissao.php?ok=true";
const H_FALHA = "location: ../painel_comissao.php?erro=true";


if (isset($_POST["matricula"]) && isset($_SESSION["membro_comite"])){ // auth
    
    include "../class/Eleitor.php";
    
    $novo_eleitor = new Eleitor(null, addslashes($_POST["matricula"]));
    
    if($novo_eleitor->criar()){
        header(H_SUCESSO);
    
    } else{
        header(H_FALHA);
    
    }
    
} else{
    die("Acesso negado.");
}

?>