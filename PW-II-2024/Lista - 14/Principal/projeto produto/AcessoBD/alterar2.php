<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Produtos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8e6e9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            flex-direction: column;
        }

        main {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        fieldset {
            border: 2px solid #ee5f61;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 15px;
        }

        legend {
            color: #ee5f61;
            font-weight: bold;
            padding: 0 10px;
        }

        p {
            margin-bottom: 15px;
            font-size: 1rem;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ee5f61;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s;
            display: inline-block;
        }

        input[type="submit"] {
            background-color: #ee5f61;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #d0544d;
        }

        h1 {
            text-align: center;
            color: #ee5f61;
            margin-bottom: 20px;
        }

        .botao {
            color: #ee5f61;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #ee5f61;
            transition: background-color 0.3s;
            display: inline-block;
            margin-top: 20px;
        }

        .botao:hover {
            background-color: #ee5f61;
            color: #fff;
        }

        .voltar-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<main>
    <h1>Alteração de produto cadastrado</h1>
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
    
    <div class="voltar-container">
        <a href="../menu.html" class="botao">Voltar</a>
    </div>
</main>
</body>
</html>
