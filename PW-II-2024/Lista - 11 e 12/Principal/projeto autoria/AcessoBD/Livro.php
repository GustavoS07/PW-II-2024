<?php

include_once "conectar.php";

// Parte 1: atributos
class Livro
{
    private $cod_livro;
    private $titulo;
    private $categoria;
    private $isbn;
    private $idioma;
    private $qtdePag;
    private $conn;

    // Parte 2: getters e setters

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
        return $this->qtdePag;
    }

    public function setQpag($qpag) {
        $this->qtdePag = $qpag;
    }

    function listar() {
        try {
            $this->conn = new Conectar();
            @$sql = $this->conn->query("SELECT * FROM livro");
            @$sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        } finally {
            $this->conn = null;
        }
    }

    function salvar() {
        try {
            $this->conn = new Conectar();
            @$sql = $this->conn->prepare("INSERT INTO livro (titulo, categoria, isbn, idioma, qtdePag) VALUES (?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCategoria(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getIsbn(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getIdioma(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getQpag(), PDO::PARAM_INT);  
            if ($sql->execute()) {
                return "Registro salvo com sucesso!";
            }
        } catch (PDOException $exc) {
            return "Erro ao salvar registro: " . $exc->getMessage();  
        } finally {
            $this->conn = null;
        }
    }


    function excluir() {
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("DELETE FROM livro WHERE cod_livro = ?");
        @$sql->bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);
        if($sql->execute() == 1) {
            return "Excluído com sucesso!";
        } else {
            
            return "Erro na exclusão!";
        }
    } catch(PDOException $exc) {
        echo "Erro ao excluir: " . $exc->getMessage();
    }
}

    function pesquisar() {
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("SELECT * FROM livro WHERE titulo LIKE ?");
        @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    } catch (PDOException $exc) {
        echo "Erro ao executar consulta. " . $exc->getMessage();
    }
}

}
