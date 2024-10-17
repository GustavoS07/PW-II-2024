<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar Livros</title>
    <link rel="stylesheet" href="../style/cadastro.css">
</head>
<body>
    <form name="CadastroProd" method="POST" action="">
        <fieldset id="a">
            <legend><b> Dados do Livro: </b></legend>
            <p>Título: <input name="txttitulo" type="text" maxlength="40" placeholder="Nome do livro"> </p>
            <p>Categoria: <input name="txtcat" type="text" placeholder="Categoria"> </p>
            <p>ISBN: <input name="txtisbn" type="text" placeholder="0"> </p>
            <p>Idioma: <input name="txtidioma" type="text" placeholder="Idioma"> </p>
            <p>Quantidade de páginas: <input name="txtpag" type="text" placeholder="0"> </p>
        </fieldset>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
            <input name="btnenviar" type="submit" value="Cadastrar">
            <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
        <?php 
        if (isset($_POST['btnenviar'])) {
            include_once 'Livro.php';
            $pro = new Livro();  
            $pro->setTitulo($_POST['txttitulo']);
            $pro->setCategoria($_POST['txtcat']);
            $pro->setIsbn($_POST['txtisbn']);
            $pro->setIdioma($_POST['txtidioma']);
            $pro->setQpag($_POST['txtpag']);
            echo "<h3><br><br>" . $pro->salvar() . "</h3>";
        }
        ?>
        <div class="button-container">
            <button><a href="../index.html"> Voltar </a></button>
        </div>
    </form>
</body>
</html>
