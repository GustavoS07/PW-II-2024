<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <form name="CadastroProd" method="POST" action="">
        <fieldset id="a">
            <legend><b> Dados do produto: </b></legend>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"> </p>
            <p>Estoque: <input name="txtestoq" type="text" size="10" placeholder="0"> </p>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
            <br>
            <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
            <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
    </form>
    <?php 
    if (isset($_POST['btnenviar'])) {
        include_once 'produto.php';
        $pro = new produto();
        $pro->setNome($_POST['txtnome']);
        $pro->setEstoque($_POST['txtestoq']);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }
    ?>
    <br>
    <center>
        <button><a href="../index.html"> Voltar </a></button>
    </center>
</body>
</html>