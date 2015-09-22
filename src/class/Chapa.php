<?php

include "Conexao.php";

/*
 * @Classe: as instâncias serão cada chapa, com seus devidos poderes e atributos;
 *          também é objeto de acesso ao banco de dados (DAO)
 * @Tabela: chapa
 */
class Chapa extends Conexao{
    
    // chave primária identificadora da chapa
    // também é o número identificador dela no momento de voto
    private $id;
    // nome adotado pela chapa
    private $nome;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula e int id de chapa válidos e existentes.
     *              (sem nenhum parâmetro o objeto instanciado será inútil)
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado;
     *             se parâmetro for $nome, cria novo objeto sem atributo $id;
     *             se nenhum parâmetro for passado, objeto "oco" é instanciado, e warning é echoada.
     */
    public function __construct($res = null, $numero_id = null, $nome = null) {
        
        if (isset($res)){
            $this->id = $res["id"];
            $this->nome = $res["nome"];
            
        } else if(isset($nome) && isset($numero_id)){
            $this->id = $numero_id;
            $this->nome = $nome;
            
        } else{
            echo "Atenção >> Esperado parâmetro na instância de chapa.";
            
        }
        
    }
    
    /*
    * @Método: getter do id
    * @Retorno: atributo de id
    */
    public function getNum(){
        return $this->id;
    }
    
    /*
    * @Método: getter do id
    * @Retorno: atributo de id
    */
    public function getNome(){
        return $this->nome;
    }
    
    /*
    * @Override
    * README: não estará implementada na versão inicial do sistema.
    */
    public function criar(){
        $sql = "insert into chapa (id, nome) values ($this->id, '$this->nome')";
        return mysqli_query(parent::abrir(), $sql);
        //return false;
    }
    
    /*
    * @Override
    */
    protected static function getConsulta($idPk = null){
        $sql = "select * from chapa";
        
        if (isset($idPk) && is_int($idPk)){
            $sql .= " where id=$idPk";
        }
        
        return mysqli_query(parent::abrir(), $sql);
    }
    
    /*
    * @Override
    * README: não estará implementada na versão inicial do sistema.
    */
    protected function atualizar(){
        // TODO
        return false;
    }
    
}

?>
