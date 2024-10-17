<?php

include_once "conectar.php";

//parte 1 atributos
class Autoria
{
    private $cod_autor;
    private $cod_livro;
    private $data_lancamento;
    private $editora;
    private $conn;



    public function getCodAutor() {
        return $this->cod_autor;
    }

    public function setCodAutor($iid) {
        $this->cod_autor = $iid;
    }

    public function getCodLivro() {
        return $this->cod_livro;
    }

    public function setCodLivro($cl) {
        $this->cod_livro = $cl;
    }

    public function getDataLanca() {
        return $this->data_lancamento;
    }

    public function setDataLanca($dl) {
        $this->data_lancamento = $dl;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($edi) {
        $this->editora = $edi;
    }

    function listar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from autoria");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao executar consulta. ".$exc->getMessage();
        }
    }

}
