<?php 

include_once 'conectar.php';

//parte 1 atributos
class produto{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    //parte 2 os getters e setters

    public function getId() {
        return $this->id;
    }

    public function setId() {
        $this->id = $iid;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome() {
        $this->id = $name;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoqui) {
        $this->id = $estoqui;
    }

    //parte 3 métodos
    function listar()
    {
        try
        {
            $this-> conn = new conectar();
            $sql = $this->conn->query("select * from produto order by nome");
            $sql-> execute();
            return $sql -> fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo"Erro ao executar consulta." .$exc->getMessage(); 
        }
    }
    function salvar()
    {
        try
        {
            $this-> conn = new conectar();
            $sql = $this->conn->prepare("insert into produto values (null,?,?)");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch (PDOExeption $exc) 
        {
            echo "erro ao salvar registro. " . $exc->getMessage();
        }
    }

}

?>