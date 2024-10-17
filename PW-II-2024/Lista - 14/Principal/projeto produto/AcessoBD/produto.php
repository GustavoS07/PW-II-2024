<?php 
include_once 'conectar.php';

class produto {
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) { 
        $this->nome = $nome;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) { 
        $this->estoque = $estoque;
    }

    // Métodos
    function listar() {
        try {
            $this->conn = new conectar();
            $sql = $this->conn->query("select * from produto order by nome");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage(); 
        }
    }

    function salvar() {
        try {
            $this->conn = new conectar();
            $sql = $this->conn->prepare("insert into produto (nome, estoque) values (?, ?)");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if ($sql->execute()) {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar registro: " . $exc->getMessage();
        }
    }
        function pesquisar() {
        try
        {
            $this-> conn = new conectar();
            $sql = $this->conn->prepare("select * from produto where nome like ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " .$exc->getMessage();
        }
    }

    function excluir() {
        try {
            $this-> conn = new conectar();
            $sql = $this->conn->prepare("DELETE FROM produto WHERE id = ?");
            @$sql -> bindParam(1,$this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 1){

                return "Excluido com sucesso!";
            }
            else{
                return "Erro na exclusao!";
            }

            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "erro ao excluir. " . $exc->getMessage();
        }
    }
    
    function alterar(){
        try{
            $this-> conn = new conectar();
            $sql = $this -> conn -> prepare ("SELECT * FROM produto WHERE id = ?");
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc){
            echo "erro ao excluir. " . $exc->getMessage();
        }
    }

    function alterar2() {
        
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update produto set nome = ?, estoque = ? where id = ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getId(), PDO::PARAM_STR);

            if($sql->execute() === 1) {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;

        }
        catch(PDOException $exc) {

            echo "Erro ao salvar o registro. " . $exc->getMessage();

        }
    }
}
?>
