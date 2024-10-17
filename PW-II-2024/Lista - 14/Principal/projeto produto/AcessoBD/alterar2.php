<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Produtos</title>
</head>
<body>
<main>
    <center><h1>Alteração de produto cadastrado</h1></center>
    <div class="separador"></div>

    <?php 
        $txtid = $_POST["txtId"];
        include_once("produto.php");
        $p = new produto();
        $p->setId($txtid);   
        $pro_bd = $p->alterar();
    ?>

    <form class="formcadastro" name="produto" method="POST" action="">
        <?php 
            foreach($pro_bd as $pro_mostrar) {
        ?>
        <fieldset>
            <input type="hidden" name="txtid" class="inpu" value="<?php echo $pro_mostrar[0]; ?>">

            <b><?php echo "ID =  " . $pro_mostrar[0]; ?></b>

            <p>Nome: <input class="inpu" name="txtnome" type="text" size="40" maxlength="40" value="<?php echo $pro_mostrar[1]; ?>" placeholder="Nome"></p>
            <p>Estoque: <input class="inpu" name="txtestoque" type="text" size="40" maxlength="40" value="<?php echo $pro_mostrar[2]; ?>" placeholder="Estoque"></p>

        </fieldset>
        <br>
        <fieldset>
            <legend><b>Opções:</b></legend>
            <br>
            <center><input class="btn" name="btnenviar2" type="submit" value="Cadastrar"></center>
            <div class="separador"></div>
        </fieldset>
        <?php 
            }
        ?>
    </form>

    <?php
        extract ($_POST, EXTR_OVERWRITE);
        if(isset($btnenviar2)) {
        include_once 'produto.php';
        $pro = new produto();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoque);
        $pro->setId($txtid);
        echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
        header("location:alterar.php");
        }
    ?>
    
    <br>
    <center>
        <button class="btn"><a class="link" href="../index.html">Voltar</a></button>
    </center>
</main>
</body>
</html>
