<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Livros</title>
    <link rel="stylesheet" href="../style/pesquisar.css">
</head>
<body>
<main>
    <center><h1>Alteração de livro cadastrado</h1></center>
    <div class="separador"></div>

    <?php 
        $txtid = $_POST["cod_livro"];
        include_once("livro.php");
        $liv = new Livro();
        $liv->setCodLivro($txtid);   
        $livro_bd = $liv->alterar();
    ?>

    <form class="formcadastro" name="livro" method="POST" action="">
        <?php 
            if (!empty($livro_bd)) {
                foreach($livro_bd as $livro_mostrar) {
        ?>
        <fieldset>
            <input type="hidden" name="txtid" class="inpu" value="<?php echo $livro_mostrar[0]; ?>">

            <b><?php echo "ID =  " . $livro_mostrar[0]; ?></b>

            <p>Título: <input class="inpu" name="txttitulo" type="text" size="40" maxlength="40" value="<?php echo $livro_mostrar[1]; ?>" placeholder="Título"></p>
            <p>Categoria: <input class="inpu" name="txtcategoria" type="text" size="40" maxlength="40" value="<?php echo $livro_mostrar[2]; ?>" placeholder="Categoria"></p>
            <p>ISBN: <input class="inpu" name="txtisbn" type="text" size="40" maxlength="40" value="<?php echo $livro_mostrar[3]; ?>" placeholder="ISBN"></p>
            <p>Idioma: <input class="inpu" name="txtidioma" type="text" size="40" maxlength="40" value="<?php echo $livro_mostrar[4]; ?>" placeholder="Idioma"></p>
            <p>Quantidade de Páginas: <input class="inpu" name="txtqpag" type="text" size="40" maxlength="40" value="<?php echo $livro_mostrar[5]; ?>" placeholder="Quantidade de Páginas"></p>

        </fieldset>
        <br>
        <fieldset>
            <legend><b>Opções:</b></legend>
            <br>
            <center><input class="btn" name="btnenviar2" type="submit" value="Cadastrar"></center>
            <center><button class="btn"><a class="link" href="../index.html">Voltar</a></button></center>
            <div class="separador"></div>
        </fieldset>
        <?php 
                }
            } else {
                echo "<p>Nenhum livro encontrado com esse código.</p>";
            }
        ?>
    </form>

    <?php
        if (isset($_POST['btnenviar2'])) {
            $cod_livro = $_POST["txtid"];
            $titulo = $_POST["txttitulo"];
            $categoria = $_POST["txtcategoria"];
            $isbn = $_POST["txtisbn"];
            $idioma = $_POST["txtidioma"];
            $qtdePag = $_POST["txtqpag"];
            include_once 'livro.php';
            $liv = new Livro();
            $liv->setCodLivro($cod_livro);
            $liv->setTitulo($titulo);
            $liv->setCategoria($categoria);
            $liv->setIsbn($isbn);
            $liv->setIdioma($idioma);
            $liv->setQpag($qtdePag);
            echo "<br><br><h3>" . $liv->alterar2() . "</h3>";
            header("Location: alterarLivro.php");
        }
    ?>
    
    <br>
</main>
</body>
</html>
