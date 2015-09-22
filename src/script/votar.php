<?php

function __autoload($file){
    if(file_exists('../class/' . $file . '.php')){
        require_once('../class/' . $file . '.php');
    } else{
        exit('O arquivo ' . $file . ' não encontrado.');
    }
}

// constante de cabeçalho para redirecionar à página da urna, espera valor pra flag get
const H_VOLTAR = "location: ../urna.php";
const VOTO_DESCONSIDERADO = "-1"; // 

// busca eleitor e registra seu voto.
if (isset($_REQUEST["eleitor"]) && isset($_REQUEST["voto"])){
    // consulta
    $eleitor_id = $_REQUEST["eleitor"];
    $res = Eleitor::getConsulta($eleitor_id);
    
    if (mysqli_num_rows($res)){
        
        // cria instância do usuário
        $res = mysqli_fetch_array($res);
        $eleitor = new Eleitor($res, null);
        
        // tenta votar, atualizar e retornar a flag de voto válido ou de constante de nulo
        $flag_voto = ($eleitor->votar($_REQUEST["voto"]) && $eleitor->atualizar()) ? $_REQUEST["voto"] : VOTO_DESCONSIDERADO;
        header(H_VOLTAR."?eleitor=$eleitor_id&voto=$flag_voto");
        
    } else{
        die("Usuário não encontrado.");
    }
} else{
    die("Parâmetros esperados.");
}

?>