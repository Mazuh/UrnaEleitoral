<?php

/*
 * @Classe: as instâncias serão cada eleitor, com seus devidos poderes e atributos;
 *          também é oobjeto de acesso ao banco de dados (DAO)
 * @Tabela: usuario
 */
class Eleitor extends Conexao{
    
    // representa chave primária do banco de dados, identificador único
    protected $id;    
    // matrícula do eleitor
    protected  $matricula;
    // id da chapa em que votou
    protected  $chapa_votada;
    // hora e data em que o voto foi registrado no banco de dados
    protected  $momento_voto;
    
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
            $this->id = intval($res["id"]);
            $this->matricula = $res["matricula"];
            $this->chapa_votada = intval($res["chapa_votada"]);
            $this->momento_voto = intval($res["momento_voto"]);
            
        } else if(isset($matricula)){
            $this->matricula = $matricula;
            
        } else{
            echo "Atenção >> Esperado parâmetro na instância do usuário.";
            
        }
        
    }
    
    /*
    * @Método: getter da matrícular.
    * @Retorno: o valor do atributo matrícula da instância.
    */
    public function getMatricula(){
        return $this->matricula;
    }
    
    /*
    * @Método: informa se a instância já tem voto.
    * @Retorno: true se já atributo de voto tiver um valor.
    */
    public function jaVotou(){
        return isset($this->chapa_votada) && $this->chapa_votada != null;
    }

    /*
     * @Método: marca em qual chapa o eleitor votou.
     * @Parâmetros: int id da Chapa em que o usuário vai votar.
     * @Retorno: true se a não havia voto (e agora, há); false se a instância já havia votado.
     */
    public function votar($id_chapa){
        if (!$this->jaVotou()){
            $this->chapa_votada = intval($id_chapa);
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
        
        // verifica se o campo de voto existe para ser atualizado
        if ($this->jaVotou()){
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
        
        if (isset($idPk)){
            $idPk = intval($idPk);
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
        $matricula = addslashes($matricula);
        $sql = "select * from usuario where matricula='$matricula'";
        return mysqli_fetch_array(mysqli_query(parent::abrir(), $sql));
    }
    
    public static function getConsultaPorChapa($id_chapa_votada){
        $id_chapa_votada = intval($id_chapa_votada);
        $sql = "select * from usuario where chapa_votada=$id_chapa_votada";
        
        return mysqli_query(parent::abrir(), $sql);
        
    }
    
}

?>
