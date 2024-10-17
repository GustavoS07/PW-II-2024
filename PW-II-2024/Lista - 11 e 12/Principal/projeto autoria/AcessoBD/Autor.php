<?php

include_once "conectar.php";

class Autor
{
    private $cod_autor;
    private $nomeAutor;
    private $sobreNome;
    private $email;
    private $nasc;
    private $conn;

    public function getCod_autor() {
        return $this->cod_autor;
    }

    public function setCod_autor($iid) {
        $this->cod_autor = $iid;
    }

    public function getNomeAutor() {
        return $this->nomeAutor;
    }

    public function setNomeAutor($name) {
        $this->nomeAutor = $name;
    }

    public function getSobreNome() {
        return $this->sobreNome;
    }

    public function setSobreNome($sobre) {
        $this->sobreNome = $sobre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($Email) {
        $this->email = $Email;
    }

    public function getNasc() {
        return $this->nasc;
    }

    public function setNasc($Nasc) {
        $this->nasc = $Nasc;
    }

     function listar() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("SELECT * FROM autor");
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage();
        } finally {
            $this->conn = null;
        }
    }

     function salvar() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare(
                "INSERT INTO autor (nomeAutor, sobreNome, email, nasc) VALUES (?, ?, ?, ?)"
            );
            @$sql->bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSobreNome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getEmail(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getNasc(), PDO::PARAM_STR);

            if ($sql->execute()) {
                return "Registro de autor salvo com sucesso!";
            } else {
                return "Falha ao salvar registro do autor.";
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
            $sql = $this->conn->prepare("DELETE FROM autor WHERE cod_autor = ?");
            @$sql->bindParam(1, $this->getCod_autor(), PDO::PARAM_INT);
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
            $sql = $this->conn->prepare("SELECT * FROM autor WHERE NomeAutor LIKE ?");
            @$sql->bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage();
        }
    }
}
