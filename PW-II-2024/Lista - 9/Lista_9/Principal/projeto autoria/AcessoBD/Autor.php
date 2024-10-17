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
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from autor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo "Erro ao executar consulta. ".$exc->getMessage();
        }
    }

}
