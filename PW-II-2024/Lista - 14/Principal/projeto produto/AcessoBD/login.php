<?php
include_once 'conectar.php';

class Usuario {
    private $usuario;
    private $senha;
    private $conn;

    public function getLogi() {
        return $this->usuario;
    }

    public function setLogi($usuario) {
        $this->usuario = $usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    function Logar() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE usuario = ? AND senha = ?");
            @$sql->bindParam(1, $this->getLogi(), PDO::PARAM_STR); 
            @$sql->bindParam(2, $this->getSenha(), PDO::PARAM_STR); 
            $sql->execute();
            $result = $sql->fetchAll();

            return $result;

        } catch (PDOException $exc) {
            echo "Erro ao executar: " . $exc->getMessage();
            return [];
        } finally {
            $this->conn = null;
        }
    }
}
?>
