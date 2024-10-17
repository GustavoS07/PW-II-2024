<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Alterar Livros</title>
    <link rel="stylesheet" href="../style/pesquisar.css">
</head>
<body>
    <form name="livro" method="POST" action="alterarLivro2.php">
        <fieldset id="a">
            <legend><b>Informe o ID do livro:</b></legend>
            <p>ID: <input name="cod_livro" type="text" size="40" maxlength="40" placeholder="ID do Livro"></p>
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
