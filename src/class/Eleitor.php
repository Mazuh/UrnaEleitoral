<?php

include "Conexao.php";

/*
 * @Classe: objeto de acesso ao banco de dados (DAO)
 * Representa tabela de usuários.
 */
class Eleitor{
    
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
     * @Método: salva as alterações da instância no banco de dados
     *          (cria uma nova linha no banco ou a altera, se existir).
     * @Parâmetros: nenhum, usa os atributos da instância.
     * @Retorno: true se os atributos serem válidos e a persistência ocorrer
     * com sucesso; false se ocorrer algum erro de integridade ou acesso.
     */
    public function persistir(){
        // TODO
    }
    
    /*
     * @Método: realiza a consulta na tabela do bd.
     * @Parâmetros: identificador por array
     * @Retorno: o mesmo tipo que o retorno de mysqli_query.
     *          A consulta retornará tudo se $id for inválido e/ou inexistir,
     *          Ou filtra a consulta, se $id for válido.
     */
    public static function getConsulta($id = null){
        // TODO 
    }
    
}

?>
