<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produtos Cadastrados</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e9f5e7; /* Fundo claro complementar */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #56b2d7; /* Cor do título */
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        fieldset {
            border: 2px solid #56b2d7;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            background-color: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            color: #56b2d7;
            font-weight: bold;
            padding: 0 10px;
        }

        p {
            margin-bottom: 15px;
            font-size: 1rem;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #56b2d7;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #56b2d7;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #4a9cb4;
        }

        input[type="reset"] {
            background-color: #a0d4eb;
            color: #333;
        }

        input[type="reset"]:hover {
            background-color: #8cc3de;
        }

        h3 {
            color: #56b2d7;
            text-align: center;
            margin-top: 20px;
        }

        .botao {
            color: #56b2d7;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #56b2d7;
            transition: background-color 0.3s;
            display: inline-block;
            margin-top: 20px;
        }

        .botao:hover {
            background-color: #56b2d7;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exclusão de Produtos Cadastrados</h1>
        <form name="cliente" method="POST" action="">
            <fieldset id="a">
                <legend><b>Informe o ID do produto desejado:</b></legend>
                <p> Id: <input name="txtID" type="text" size="20" maxlength="5" placeholder="Id do Produto"></p>
                <div style="text-align: center;">
                    <input name="btnEnviar" type="submit" value="Excluir">
                    <input name="limpar" type="reset" value="Limpar">
                </div>
            </fieldset>  
        </form>
        <fieldset id="b">
            <legend><b>Resultado:</b></legend>
            <?php 
                extract($_POST, EXTR_OVERWRITE);
                if (isset($btnEnviar)) {
                    include_once 'produto.php';
                    $p = new produto();
                    $p->setId($txtID);
                    echo "<h3>" . $p->excluir() . "</h3>";
                }
            ?>
        </fieldset>  
        
        <a href="../menu.html" class='botao'>Voltar</a>
    </div>
</body>
</html>
