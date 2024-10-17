<?php 
class Conectar extends PDO
    {
        private static $instancia;
        private $query;
        private $host = "127.0.0.1";
        private $usuario ="root";
        private $senha = "";
        private $bd = "exemplocurso";

    

    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->bd","$this->usuario","$this->senha");
    }
    
    public static function getInstance()
    {
        if(!isset(self::$instancia))
        {
            try
            {
                self::$instancia = new Conectar;
                echo'Conectado com sucesso!!!';
            }
            catch(Exception $e)
            {
                echo 'Erro ao se conectar :(';
                exit(); 
            }
        }
        return self::$instancia;
    }

    public function sql ($query)
    {
        $this->getInstance();
        $this->query = ($this->query);
        $stmt->execute();
        $pdo = null; 
    }
}    
?>