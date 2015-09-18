<?php

/*
 * Classe para unificar a configuração e acesso ao banco de dados.
 */
class Conexao {
    /*
     * README: atributos configurados apenas pro ambiente de desenvolvimento;
     *      basta mudá-los quando for pra produção.
     *      PS: não commitar no git os dados reais (é sério, não faça isso rs)
     */

    // localização do banco de dados
    private static $host = "localhost";
    // autenticação de acesso ao banco
    private static $usuario = "root";
    private static $senha = "";
    // nome do banco de dados
    private static $bd = "eleicao_gremio2015";

    public static function criar() {
        $link = mysqli_connect($host, $usuario, $senha);
        
        if (!$link) {
            die("Erro: " . mysql_error($link));
        } else {
            if (!mysqli_select_db($link, $bd)) {
                die("Erro: " . mysql_error($link));
            }
        }
        
        return $link;
        
    }

}

?>
