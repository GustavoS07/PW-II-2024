<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fce4f0; /* Fundo claro complementar */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            flex-direction: column; /* Direção vertical */
        }

        form {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Espaço para o botão Voltar */
        }

        fieldset {
            border: 2px solid #de66bf; /* Cor do campo */
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 15px;
        }

        legend {
            color: #de66bf; /* Cor do título do campo */
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
            border: 1px solid #de66bf;
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
            margin-right: 10px; /* Espaçamento entre os botões */
        }

        input[type="submit"] {
            background-color: #de66bf; /* Cor do botão Cadastrar */
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #c254a5; /* Cor ao passar o mouse */
        }

        input[type="reset"] {
            background-color: #e0a8d3; /* Cor do botão Limpar */
            color: #333;
        }

        input[type="reset"]:hover {
            background-color: #ca8cb8; /* Cor ao passar o mouse */
        }

        h3 {
            color: #de66bf; /* Cor do resultado */
            text-align: center;
            margin-top: 20px;
        }

        .botao {
            color: #de66bf; /* Cor do botão Voltar */
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #de66bf; /* Bordas do botão */
            transition: background-color 0.3s;
            margin-top: 20px;
            display: inline-block; /* Para centralizar */
        }

        .botao:hover {
            background-color: #de66bf; /* Cor ao passar o mouse */
            color: #fff;
        }

        .voltar-container {
            text-align: center; /* Centraliza o conteúdo */
            margin-top: 20px; /* Espaço acima do botão Voltar */
        }
    </style>
</head>
<body>
    <form name="CadastroProd" method="POST" action="">
        <fieldset id="a">
            <legend><b> Dados do produto: </b></legend>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"> </p>
            <p>Estoque: <input name="txtestoq" type="text" size="10" placeholder="0"> </p>
        </fieldset>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
            <input name="btnenviar" type="submit" value="Cadastrar"> 
            <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
    </form>
    
    <?php 
    if (isset($_POST['btnenviar'])) {
        include_once 'produto.php';
        $pro = new produto();
        $pro->setNome($_POST['txtnome']);
        $pro->setEstoque($_POST['txtestoq']);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }
    ?>

    <div class="voltar-container">
        <a href="../menu.html" class="botao">Voltar</a>
    </div>
</body>
</html>
