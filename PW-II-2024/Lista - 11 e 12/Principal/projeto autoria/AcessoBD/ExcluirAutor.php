<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Excluir Autor</title>
</head>
<body>
    <div class="center">
        <h1>Exclusão de Autores Cadastrados</h1>
        <form name="autor" method="POST" action="">
            <fieldset>
                <legend>Informe o Código do Autor desejado:</legend>
                <p>Cod Autor: <input name="txtCodAutor" type="text" size="20" maxlength="5" placeholder="Código do Autor"></p>
                <input name="btnExcluir" type="submit" value="Excluir">
                <input name="btnLimpar" type="reset" value="Limpar">
            </fieldset>
        </form>
        <fieldset>
            <legend>Resultado:</legend>
            <?php 
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnExcluir)){
                        include_once 'Autor.php';
                        $autor = new Autor();
                        $autor->setCod_autor($txtCodAutor);
                        echo "<h3>" . $autor->excluir() . "</h3>";
                }
            ?>
        </fieldset>
        <a href="../index.html">Voltar</a>
    </div>
</body>
</html>
