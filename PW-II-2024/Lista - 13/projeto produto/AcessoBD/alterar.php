<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Alterar</title>
</head>
<body>
    <form name="produtos" method="POST" action="alterar2.php">
        <fieldset id="a">
            <legend><b>Informe o ID do produto:</b></legend>
            <p>ID: <input name="txtId" type="text" size="40" maxlength="40" placeholder="ID do Produto" required></p>
            <br><br>
            <center>
                <input name="btnEnviar" type="submit" value="Pesquisar">&nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
            </center>
        </fieldset>
    </form>
    <center>
        <br><br><br><br><br>
        <a href='../index.html' class='botao'>Voltar</a>
    </center>
</body>
</html>
