<?php

/*
 * @Classe: para unificar a configuração e acesso ao banco de dados.
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

    /*
     * @Método: cria e inicia conexão com banco de dados.
     * @Retorno: link de conexão (para ser usado nos parâmeros mysqli_*)
     *          OU
     *           aplicação die() e exibe erro.
     */
    public static function criar() {
        
        $link = mysqli_connect(self::$host, self::$usuario, self::$senha) 
                or die("Falha ao tentar acessar banco de dados.");
        
        if (!$link) {
            die("Falha ao tentar acessar banco de dados.");
        } else {
            if (!mysqli_select_db($link, self::$bd)) {
                die("Erro ao tentar selecionar banco de dados");
            }
        }
        
        return $link;
        
    }

}

$con = Conexao::criar();

?>
