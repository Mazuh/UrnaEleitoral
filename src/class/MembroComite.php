<?php

include "Eleitor.php";
include "Chapa.php";

/*
 * @Classe: as instâncias serão cada membro de comitê, com seus devidos poderes e atributos;
 *          também é objeto de acesso ao banco de dados (DAO)
 * @Tabela: usuario
 */
class MembroComite extends Eleitor{
    
    private $membro_comite = 1;
    private $senha;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula válida e
     *              string da matrícula (sem ser o hash);
     *              (sem nenhum parâmetro o objeto instanciado será inútil)
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado;
     *             se parâmetro for $matricula e $senha cria novo objeto sem alguns atributos;
     *             se nenhum parâmetro for passado, objeto "oco" é instanciado, e warning é echoada.
     */
    public function __construct($res = null, $matricula = null, $senha=null) {
        parent::__construct($res, $matricula);
        
        if(isset($res)){
            $this->senha = $res["senha_comite"];
            
        } else if (isset($matricula) && isset($senha)){
            $this->senha = $this->criptografar($senha);
            
        } else{
            echo "Erro >> Parâmetros esperados na instância de usuário do comitê.";
        }
        
    }
    
    /*
    * @Método: verifica se a senha argumentada é igual à encontrada nos atributos.
    * @Parâmetros: string (descriptografada) da senha
    * @Retorno: true se a senha for igual; false e não.
    */
    public function validaSenha($senha){
        return $this->senha === $this->criptografar($senha);
    }
    
    public function getQtdVotosDaChapa($id_chapa_votada){
        return mysqli_num_rows(parent::getConsultaPorChapa($id_chapa_votada));
    }
    
    public function getQtdMatriculasCadastradas(){
        return mysqli_num_rows(parent::getConsulta());
    }
    
    /*
    * @Método: conta quantos votos não-nulos foram registrados
    * @Retorno: quantidade de votos
    */
    public function getQtdVotosValidos(){
        // identifica as chapas
        $chapas = Chapa::getConsulta();
        
        // inicia contagem
        $qtd = 0;
        while ($chapa = mysqli_fetch_array($chapas)){
            // incrementa com a soma de cada usuário por chapa
            $qtd += mysqli_num_rows(parent::getConsultaPorChapa($chapa->getNum()));
        }
        return $qtd;
    }
    
    /*
    * @Override
    */
    public function criar(){
        $sql = "insert into usuario (matricula, membro_comite, senha_comite) values ('$this->matricula', 1, '$this->senha')";
        return mysqli_query(parent::abrir(), $sql);
    }
    
    /*
    * @Método: cripgrafa uma string qualquer
    * @Parâmetros: string qualquer
    * @Retorno: hash da string criptgrafada
    */
    private function criptografar($var){
        return hash('sha256', $var);
    }
    
}

?>
