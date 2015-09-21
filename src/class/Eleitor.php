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
    private $chapa_votada;
    // hora e data em que o voto foi registrado no banco de dados
    private $momento_voto;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula válida.
     *              (sem nenhum parâmetro o objeto instanciado será inútil)
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado;
     *             se parâmetro for $matricula, cria novo objeto sem atributos;
     *             se nenhum parâmetro for passado, objeto "oco" é instanciado, e warning é echoada.
     */
    public function __construct($res = null, $matricula = null) {
        
        if (isset($res)){
            $this->id = $res["id"];
            $this->matricula = $res["matricula"];
            $this->chapa_votada = $res["chapa_votada"];
            $this->momento_voto = $res["momento_voto"];
            
        } else if(isset($matricula)){
            $this->matricula = $matricula;
            
        } else{
            echo "Atenção >> Esperado parâmetro na instância do usuário.";
            
        }
        
    }

    /*
     * @Método: marca em qual chapa o eleitor votou.
     * @Parâmetros: id da Chapa em que o usuário vai votar.
     * @Retorno: TODO: true se o valor for um id numérico; false caso não.
     */
    public function votar($id_chapa){
        if (is_int($id_chapa)){
            $this->chapa_votada = $id_chapa;
            return true;
        }
        return false;
    }
    
    
    /*
    * @Override
    */
    public function atualizar(){
        if (!isset($this->id)) // então ainda não existe pra ser atualizado
            return false;
        
        // verifica se o campo de voto deve ser atualizado.
        if (isset($this->chapa_votada)){
            $sql = "update usuario";
            $sql .= " set chapa_votada=$this->chapa_votada, momento_voto=current_timestamp()";
            $sql .= " where id=$this->id";
            
            return mysqli_query(parent::abrir(), $sql);
            
        } else{
            return false;
        }
        
    }
    
    /*
    * @Override
    */
    public function criar(){
        $sql = "insert into usuario (matricula) values ('$this->matricula')";
        return mysqli_query(parent::abrir(), $sql);
    }
    
    /*
    * @Override
    */
    public static function getConsulta($idPk = null){
        $sql = "select * from usuario";
        
        if (isset($idPk) && is_int($idPk)){
            $sql .= " where id=$idPk";
        }
        
        return mysqli_query(parent::abrir(), $sql);
    }
    
    /*
     * @Método: realiza operação select no bd com filtro por campo matrícula.
     * @Parâmetros: valor do campo matrícula
     * @Retorno: o mesmo tipo que o retorno (matriz associativa) de mysqli_fetch_array(mysqli_query),
     *          tendo a query sido devidamente filtrada por $matrícula.
     */
    public static function getConsultaPorMatricula($matricula){
        $sql = "select * from usuario where matricula='$matricula'";
        return mysqli_fetch_array(mysqli_query(parent::abrir(), $sql));
    }
    
}

?>
