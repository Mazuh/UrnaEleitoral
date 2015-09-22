<?php

session_start();

function __autoload($file){
    if(file_exists('../class/' . $file . '.php')){
        require_once('../class/' . $file . '.php');
    } else{
        exit('O arquivo ' . $file . ' não encontrado.');
    }
}

// cabeçalho de redirecionamento
const H_PAINEL = "location: ../painel_comite.php";


if (isset($_POST["matricula"]) && isset($_POST["senha"])){
    // membro da comissão tentando logar
    $matricula = $_POST["matricula"];
    $senha = $_POST["senha"];

    if ($res_membroComite = MembroComite::getConsultaPorMatricula($matricula)){
        // é membro da comissão?
        if ($res_membroComite["membro_comite"] == 1){
            $membroComite = new MembroComite($res_membroComite, null, null);
            // senha correta?
            if ($membroComite->validaSenha($senha)){
                // OK, cria sessão!
                $_SESSION["membro_comite"] = serialize($membroComite);
                // redireciona
                header(H_PAINEL);
                
            } else{
                die("Senha incorreta. Acaso está tentando invadir o sistema, cabra de peia?");
            }
            
        }else{
            die("Matrícula não cadastrada na comissão. Este incidente será reportado!"); // mentira, só pra assustar rs
        }
        
    }else{
        // consulta não retornou nada na matrícula
        die("Membro da comissão não conseguiu ser encontrado.");
    }
    
} else{
    // membro comum ou não cadastrado
    die("Acesso negado. Falta de parâmetros.");
    
}

?>