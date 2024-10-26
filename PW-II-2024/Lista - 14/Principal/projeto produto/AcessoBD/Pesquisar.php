<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Pesquisar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e9f5e7;
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
            color: #8ccc78;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        fieldset {
            border: 2px solid #8ccc78;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            background-color: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            color: #8ccc78;
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
            border: 1px solid #8ccc78;
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
            background-color: #8ccc78;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #76b669;
        }

        input[type="reset"] {
            background-color: #b0de9d;
            color: #333;
        }

        input[type="reset"]:hover {
            background-color: #98c788;
        }

        h3 {
            color: #8ccc78;
            text-align: center;
            margin-top: 20px;
        }

        .botao {
            color: #8ccc78;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #8ccc78;
            transition: background-color 0.3s;
            display: inline-block;
            margin-top: 20px;
        }

        .botao:hover {
            background-color: #8ccc78;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pesquisar Produto</h1>
        <form name="produtos" method="POST" action="">
            <fieldset id="a">
                <legend><b>Informe o nome do produto:</b></legend>
                <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"></p>
                <input name="btnEnviar" type="submit" value="Pesquisar">
                <input name="limpar" type="reset" value="Limpar">
            </fieldset>

            <fieldset id="b">
                <legend><b>Resultado:</b></legend>
                <?php 
                    extract($_POST, EXTR_OVERWRITE);
                    if (isset($btnEnviar)) {
                        include_once 'produto.php';
                        $p = new produto();
                        $p->setNome($txtnome . '%');
                        $pro_bd = $p->pesquisar();
                        foreach ($pro_bd as $pro_mostrar) {
                            echo "<p><b>" . $pro_mostrar[0] . "</b> &nbsp;&nbsp; <b>" . $pro_mostrar[1] . "</b> &nbsp;&nbsp; <b>" . $pro_mostrar[2] . "</b></p>";
                        }
                    }
                ?>
            </fieldset>
        </form>

        <a href='../menu.html' class='botao'>Voltar</a>
    </div>
</body>
</html>
