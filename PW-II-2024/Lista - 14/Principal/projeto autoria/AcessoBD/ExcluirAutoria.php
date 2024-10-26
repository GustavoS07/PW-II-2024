<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Excluir Autoria</title>
</head>
<body>
    <div class="center">
        <h1>Exclusão de Autoria Cadastrada</h1>
        <form name="autoria" method="POST" action="">
            <fieldset>
                <legend>Digite os Códigos do Autor e do Livro desejados:</legend>
                <p>Cod Autor: <input name="txtCodAutor" type="text" size="20" maxlength="5" placeholder="Código do Autor"></p>
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
                        include_once 'Autoria.php';
                        $autoria = new Autoria();
                        $autoria->setCodAutor($txtCodAutor);
                        $autoria->setCodLivro($txtCodLivro);
                        echo "<h3>" . $autoria->excluir() . "</h3>";
                }
            ?>
        </fieldset>
        <a href="../menu.html">Voltar</a>
    </div>
</body>
</html>
