<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Página de Excluir Livro</title>
</head>
<body>
    <div class="center">
        <h1>Exclusão de Livros Cadastrados</h1>
        <form name="livro" method="POST" action="">
            <fieldset>
                <legend>Digite o Código do Livro desejado:</legend>
                <p>Cod Livro: <input name="txtCodLivro" type="text" size="20" maxlength="5" placeholder="Código do Livro"></p>
                <input name="btnExcluir" type="submit" value="Excluir">
                <input name="btnLimpar" type="reset" value="Limpar">
            </fieldset>
        </form>
        <fieldset>
            <legend>Resultado:</legend>
            <?php 
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnExcluir)){
                        include_once 'Livro.php';
                        $livro = new Livro();
                        $livro->setCodLivro($txtCodLivro);
                        echo "<h3>" . $livro->excluir() . "</h3>";
                }
            ?>
        </fieldset>
        <a href="../index.html">Voltar</a>
    </div>
</body>
</html>
