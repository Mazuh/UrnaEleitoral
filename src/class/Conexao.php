<?php

/*
 * @Classe: para unificar a configuração e acesso ao banco de dados.
 */
abstract class Conexao {
    /*
     * README: atributos configurados apenas pro ambiente de desenvolvimento;
     *      basta mudá-los quando for pra produção.
     *      PS: não commitar no git os dados reais (é sério, não faça isso rs)
     */

    // localização do banco de dados
    private static $host = "localhost";
    // autenticação de acesso ao banco
    private static $usuario = "root";
    private static $senha = "root";
    // nome do banco de dados
    private static $bd = "eleicao_gremio2015";

    /*
     * @Método: cria e inicia conexão com banco de dados.
     * @Retorno: link de conexão (para ser usado nos parâmeros mysqli_*)
     *          OU
     *           aplicação die() e exibe erro.
     */
    protected static function abrir() {
    
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
    
    /*
     * @Método: realiza operação select no bd.
     * @Parâmetros: chave primária por array
     * @Retorno: o mesmo tipo que o retorno de mysqli_query.
     *          A consulta retornará tudo se $idPk for inválido e/ou inexistir,
     *          Ou filtra a consulta, se $idPk for válido.
     */
    abstract protected static function getConsulta($idPk = null);
    
    /*
     * @Método: realiza operação update no bd.
     * @Parâmetros: nenhum, usa os atributos da instância.
     * @Retorno: true se os atributos serem válidos e a persistência ocorrer
     *          com sucesso; false se ocorrer algum erro de integridade ou acesso.
     */
    abstract protected function atualizar();
    
    /*
     * @Método: realiza operação insert no bd.
     * @Parâmetros: nenhum, usa os atributos da instância, a chave primária não
     *              precisa estar definida.
     * @Retorno: true se os atributos serem válidos e a persistência ocorrer
     *          com sucesso; false se ocorrer algum erro de integridade ou acesso.
     */
    abstract protected function criar();

}

?>
