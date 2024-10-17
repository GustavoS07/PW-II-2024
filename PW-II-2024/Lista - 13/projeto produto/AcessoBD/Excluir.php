<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de excluir</title>
</head>
<body>
    <center><font face ="Century Gothic" size="6"><b>Exclusão de produtos Cadastrados</b></font></center>

    <br>

    <font size="4">
        <form name="cliente" method="POST" action="">
            <fieldset id="a">
                <legend><b> Informe o ID do produto desejado:</b></legend>
                <p> Id: <input name ="txtID" type="text" size="20" maxlength="5" placeholder="Id do Produto">
                <br><br><center>
                    <input name="btnEnviar" type="submit" value="Excluir"> &nbsp;&nbsp;
                    <input name="limpar" type="reset" value="Limpar">
            </fieldset>  
    </form>
    <fieldset id= "b">
    <legend><b>Resultado:<b>

    <?php 
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnEnviar)){
            include_once'produto.php';
            $p = new produto();
            $p->setId($txtID);
            echo "<h3>" . $p->excluir() . "</h3>";
        }
    ?>
    </fieldset>  

    <br><br><br>
    <center><a href="../index.html">Voltar</a></center>
    </font>
</body>
</html>