<?php

session_start();

include "../class/Eleitor.php";
include "../class/MembroComite.php";

if (isset($_POST["usuario"])){
    
    if (isset($_POST["senha"]) && isset($_POST["tipo-acesso"]) && $_POST["tipo-acesso"] == "comissao"){
        // membro comissão
        
        
    }else{
        // eleitor comum
        
        
    }
    
} else{
    die("Acesso negado.");
    
}

?>