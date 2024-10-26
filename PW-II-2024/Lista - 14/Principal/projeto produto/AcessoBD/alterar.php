<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Alterar</title>
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

        form {
            width: 100%;
            max-width: 400px;
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
            background-color: #ee5f61;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #d0544d; 
        }

        input[type="reset"] {
            background-color: #f4a6b3;
            color: #333;
        }

        input[type="reset"]:hover {
            background-color: #e2899f; 
        }

        h3 {
            color: #ee5f61;
            text-align: center;
            margin-top: 20px;
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
            margin-top: 20px;
            display: inline-block;
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
    <form name="produtos" method="POST" action="alterar2.php">
        <fieldset id="a">
            <legend><b>Informe o ID do produto:</b></legend>
            <p>ID: <input name="txtId" type="text" size="40" maxlength="40" placeholder="ID do Produto" required></p>
            <br><br>
            <center>
                <input name="btnEnviar" type="submit" value="Pesquisar">&nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
            </center>
        </fieldset>
    </form>
    <div class="voltar-container">
        <a href='../menu.html' class='botao'>Voltar</a>
    </div>
</body>
</html>
