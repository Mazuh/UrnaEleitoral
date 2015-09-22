<?php

die("README: classe de candidato fora do escopo desta versão do sistema.");

/*
 * @Classe: as instâncias serão cada candidato, com seus devidos poderes e atributos;
 *          também é objeto de acesso ao banco de dados (DAO)
 * @Tabela: usuario
 */
final class Candidato extends Eleitor{
    
    private $chapa_pertencente;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula e int id de chapa válidos e existentes.
     *              (sem nenhum parâmetro o objeto instanciado será inútil)
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado;
     *             se parâmetro for $matricula e $chapa_pertencente, cria novo objeto sem atributos;
     *             se nenhum parâmetro for passado, objeto "oco" é instanciado, e warning é echoada.
     */
    public function __construct($res = null, $matricula = null, $chapa_pertencente = null) {
        
        if (isset($res)){
            parent::__construct($res, null);
            $this->chapa_pertencente = $res["chapa_pertencente"];
            
        } else if(isset($matricula) && isset($chapa_pertencente)){
            parent::__construct(null, $matricula);
            $this->chapa_pertencente = $chapa_pertencente;
            
        } else{
            echo "Atenção >> Esperado parâmetro na instância do usuário candidato.";
            
        }
        
    }
    
    /*
    * @Override
    */
    public function criar(){
        $sql = "insert into usuario (matricula, chapa_pertencente) values ('$this->matricula', $this->chapa_pertencente)";
        return mysqli_query(parent::abrir(), $sql);
    }
    
}

?>
