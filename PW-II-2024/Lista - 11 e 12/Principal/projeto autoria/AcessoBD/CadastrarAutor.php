<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autor</title>
    <link rel="stylesheet" href="../style/cadastro.css">
</head>
<body>
    <form name="CadastroAutor" method="POST" action="">
        <fieldset id="a">
            <legend><b> Dados do Autor: </b></legend>
            <p>Nome: <input name="txtnome" type="text" maxlength="40" placeholder="Nome do autor"> </p>
            <p>Sobrenome: <input name="txtsobrenome" type="text" placeholder="Sobrenome"> </p>
            <p>Email: <input name="txtemail" type="email" placeholder="exemplo@gmail.com"> </p>
            <p>Data de Nascimento: <input name="txtnasc" type="date"> </p>
        </fieldset>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
            <input name="btnenviar" type="submit" value="Cadastrar">
            <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
        <?php 
        if (isset($_POST['btnenviar'])) {
            include_once 'Autor.php';
            $autor = new Autor();
            $autor->setNomeAutor($_POST['txtnome']);
            $autor->setSobreNome($_POST['txtsobrenome']);
            $autor->setEmail($_POST['txtemail']);
            $autor->setNasc($_POST['txtnasc']);
            echo "<h3><br><br>" . $autor->salvar() . "</h3>";
        }
        ?>
        <div class="button-container">
            <button><a href="../index.html"> Voltar </a></button>
        </div>
    </form>
</body>
</html>
