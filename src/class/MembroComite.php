<?php

include "Eleitor.php";

/*
 * @Classe: as instâncias serão cada membro de comitê, com seus devidos poderes e atributos;
 *          também é objeto de acesso ao banco de dados (DAO)
 * @Tabela: usuario
 */
class MembroComite extends Eleitor{
    
    private $membro_comite = 1;
    
    /*
     * @Construtor: retorna instância já existente no bd ou não.
     * @Parâmetros: objeto da linha de um resultado mysqli_fetch_array, matriz associativa.
     *              OU
     *              string de matrícula válida.
     *              (sem nenhum parâmetro o objeto instanciado será inútil)
     * @Instância: se parâmetro for $res, cria objeto criado com atributos do bd consultado;
     *             se parâmetro for $matricula cria novo objeto sem atributos;
     *             se nenhum parâmetro for passado, objeto "oco" é instanciado, e warning é echoada.
     */
    public function __construct($res = null, $matricula = null) {
        parent::__construct($res, $matricula);
    }
    
    /*
    * @Override
    */
    public function criar(){
        $sql = "insert into usuario (matricula, membro_comite) values ('$this->matricula', 1)";
        return mysqli_query(parent::abrir(), $sql);
    }
    
}

?>
