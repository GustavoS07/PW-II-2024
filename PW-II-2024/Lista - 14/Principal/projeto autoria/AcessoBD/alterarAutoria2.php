<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Autoria</title>
    <link rel="stylesheet" href="../style/pesquisar.css">
</head>
<body>
<main>
    <center><h1>Alteração de Autoria cadastrada</h1></center>
    <div class="separador"></div>

    <?php 
        $cod_autor = $_POST["cod_autor"];
        $cod_livro = $_POST["cod_livro"];
        include_once("autoria.php");
        $autoria = new Autoria();
        $autoria->setCodAutor($cod_autor);
        $autoria->setCodLivro($cod_livro);
        $autoria_bd = $autoria->alterar();
    ?>

    <form class="formcadastro" name="autoria" method="POST" action="">
        <?php 
            if (!empty($autoria_bd)) {
                foreach($autoria_bd as $autoria_mostrar) {
        ?>
        <fieldset>
            <input type="hidden" name="txtid_autor" value="<?php echo $autoria_mostrar['Cod_autor']; ?>">
            <input type="hidden" name="txtid_livro" value="<?php echo $autoria_mostrar['Cod_livro']; ?>">

            <b><?php echo "ID Autor = " . $autoria_mostrar['Cod_autor']; ?></b><br>
            <b><?php echo "ID Livro = " . $autoria_mostrar['Cod_livro']; ?></b>

            <p>Data de Lançamento: <input name="txtdata" type="date" value="<?php echo $autoria_mostrar['Data_lancamento']; ?>"></p>
            <p>Editora: <input name="txteditora" type="text" value="<?php echo $autoria_mostrar['Editora']; ?>" placeholder="Editora"></p>
        </fieldset>
        <br>
        <fieldset>
            <legend><b>Opções:</b></legend>
            <center><input class="btnAlterar" name="btnAlterar" type="submit" value="Alterar">&nbsp;&nbsp;</center>
            <center><button class="btn"><a class="link" href="../index.html">Voltar</a></button></center>
        </fieldset>
        <?php 
                }
            }
        ?>
    </form>

    <?php
    if (isset($_POST['btnAlterar'])) {
        include_once 'autoria.php';
        $autoria = new Autoria();
        $autoria->setDataLanca($_POST['txtdata']);
        $autoria->setEditora($_POST['txteditora']);
        $autoria->setCodAutor($_POST['txtid_autor']);
        $autoria->setCodLivro($_POST['txtid_livro']);
        
        echo "<br><br><h3>" . $autoria->alterar2() . "</h3>";
        header("Location: alterarAutoria.php");
    }
    ?>
    
    <br>
</main>
</body>
</html>
