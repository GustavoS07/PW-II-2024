<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autoria</title>
    <link rel="stylesheet" href="../style/cadastro.css">
</head>
<body>
    <form name="CadastroAutoria" method="POST" action="">
        <fieldset id="a">
            <legend><b> Dados da Autoria: </b></legend>
            <p>Código do Autor: <input name="txtcodautor" type="text" maxlength="10" placeholder="Código do autor"> </p>
            <p>Código do Livro: <input name="txtcodlivro" type="text" placeholder="Código do livro"> </p>
            <p>Data de Lançamento: <input name="txtdatalanca" type="date"> </p>
            <p>Editora: <input name="txteditora" type="text" placeholder="Nome da editora"> </p>
        </fieldset>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
            <input name="btnenviar" type="submit" value="Cadastrar">
            <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
        <?php 
        if (isset($_POST['btnenviar'])) {
            include_once 'Autoria.php';
            $autoria = new Autoria();
            $autoria->setCodAutor($_POST['txtcodautor']);
            $autoria->setCodLivro($_POST['txtcodlivro']);
            $autoria->setDataLanca($_POST['txtdatalanca']);
            $autoria->setEditora($_POST['txteditora']);
            echo "<h3><br><br>" . $autoria->salvar() . "</h3>";
        }
        ?>
        <div class="button-container">
            <button><a href="../menu.html"> Voltar </a></button>
        </div>
    </form>
</body>
</html>
