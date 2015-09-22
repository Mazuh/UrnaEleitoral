<?php

include "../class/Eleitor.php";

// constante de cabeçalho para redirecionar à página da urna, espera valor pra flag get
const H_VOLTAR = "location: ../painel_urna.php?voto=";
const VOTO_DESCONSIDERADO = "-1"; // 

// busca eleitor e registra seu voto.
if (isset($_REQUEST["id"]) && isset($_REQUEST["voto"])){
    // consulta
    $res = Eleitor::getConsulta($_REQUEST["id"]);
    
    if (mysqli_num_rows($res)){
        
        // cria instância do usuário
        $res = mysqli_fetch_array($res);
        $eleitor = new Eleitor($res, null);
        
        // tenta votar e atualizar
        $flag_get = ($eleitor->votar($_REQUEST["voto"]) && $eleitor->atualizar()) ? $_REQUEST["voto"] : VOTO_DESCONSIDERADO;
        header(H_VOLTAR.$flag_get);
        
    } else{
        die("Usuário não encontrado.");
    }
} else{
    die("Parâmetros esperados.");
}

?>