<?php

include "Conexao.php";

/*
 * @Classe: as instâncias serão cada eleitor, com seus devidos poderes e atributos;
 *          também é oobjeto de acesso ao banco de dados (DAO)
 * @Tabela: usuario
 */
class Eleitor extends Conexao{
    
    // representa chave primária do banco de dados, identificador único
    private $id;    
    // matrícula do eleitor
    private $matricula;
    // id da chapa em que votou
    private $voto;
    // hora e data em que ele votou
    private $momento_voto;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula válida e existente.
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado
     *             se parâmetro for $matricula, cria novo objeto sem atributos
     */
    public function __construct($res = null, $matricula = null) {
        // TODO
    }

    /*
     * @Método: marca em qual chapa o eleitor votou.
     * @Parâmetros: id da Chapa em que o usuário vai votar.
     * @Retorno: true se o valor for um id de Chapa válido e existente;
     *          false caso dê algum erro de integridade ou acesso.
     */
    public function votar($id_chapa){
        // TODO
        $voto = $id_chapa;
        return true;
    }
    
    
    /*
    * @Override
    */
    public function persistir(){
        // TODO
    }/*
    
    * @Override
    */
    protected function atualizar(){
        // TODO
    }
    
    /*
    * @Override
    */
    protected function criar(){
        // TODO
    }
    
    /*
    * @Override
    */
    public static function getConsulta($idPk = null){
        // TODO
    }
    
    /*
     * @Método: realiza operação select no bd com filtro por campo matrícula.
     * @Parâmetros: valor do campo matrícula
     * @Retorno: o mesmo tipo que o retorno de mysqli_query.
     *          A consulta retornará tudo se $matricula for inválida e/ou inexistir,
     *          Ou filtra a consulta, se $matricula for válida.
     */
    public static function getConsultaPorMatricula($matricula){
        // TODO
    }
    
}

?>
