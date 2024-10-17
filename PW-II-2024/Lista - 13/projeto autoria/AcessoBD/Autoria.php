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
            @$sql = $this->conn->query("select * from autoria");
            @$sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao executar consulta. ".$exc->getMessage();
        }
    }
    function salvar() {
        try {
            $this->conn = new Conectar();
            @$sql = $this->conn->prepare(
                "INSERT INTO autoria (cod_autor, cod_livro, data_lancamento, editora) VALUES (?, ?, ?, ?)"
            );
            @$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_INT);
            @$sql->bindParam(2, $this->getCodLivro(), PDO::PARAM_INT);
            @$sql->bindParam(3, $this->getDataLanca(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getEditora(), PDO::PARAM_STR);
        
            if ($sql->execute()) {
                return "Registro salvo com sucesso!";
            } else {
                return "Falha ao salvar registro.";
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
            $sql = $this->conn->prepare("DELETE FROM autoria WHERE cod_autor = ? AND cod_livro = ?");
            @$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_INT);
            @$sql->bindParam(2, $this->getCodLivro(), PDO::PARAM_INT);
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
            $sql = $this->conn->prepare("SELECT * FROM autoria WHERE Editora LIKE ?");
            @$sql->bindParam(1, $this->getEditora(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
    function alterar() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM autoria WHERE cod_autor = ? AND cod_livro = ?");
            @$sql->bindParam(1, $this->getCodAutor(), PDO::PARAM_INT);
            @$sql->bindParam(2, $this->getCodLivro(), PDO::PARAM_INT);
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage();
        } finally {
            $this->conn = null;
        }
    }
    
    function alterar2() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare(
                "UPDATE autoria SET data_lancamento = ?, editora = ? WHERE cod_autor = ? AND cod_livro = ?"
            );
            $sql->bindParam(1, $this->getDataLanca(), PDO::PARAM_STR);
            $sql->bindParam(2, $this->getEditora(), PDO::PARAM_STR);
            $sql->bindParam(3, $this->getCodAutor(), PDO::PARAM_INT);
            $sql->bindParam(4, $this->getCodLivro(), PDO::PARAM_INT);
            if ($sql->execute()) {
                return "Registro alterado com sucesso!";
            }
        } catch (PDOException $exc) {
            return "Erro ao salvar o registro: " . $exc->getMessage();
        } finally {
            $this->conn = null;
        }
    }

}