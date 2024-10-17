<?php

include_once "conectar.php";

//parte 1 atributos
class Livro
{
    private $cod_livro;
    private $titulo;
    private $categoria;
    private $isbn;
    private $idioma;
    private $qtdePag;
    private $conn;

//parte 2 gettes e setter

    public function getCodLivro() {
        return $this->cod_livro;
    }

    public function setCodLivro($codlivro) {
        $this->cod_livro = $codlivro;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titu) {
        $this->titulo = $titu;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($cate) {
        $this->categoria = $cate;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($Isbn) {
        $this->isbn = $Isbn;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function setIdioma($idi) {
        $this->idioma = $idi;
    }

    public function getQpag() {
        $this->qtdePag;
    }

    public function setQpag($qpag) {
        $this->qtdePag = $qpag;
    }

    function listar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from livro");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao executar consulta. ".$exc->getMessage();
        }
    }

}
