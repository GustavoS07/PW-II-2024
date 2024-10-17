php
Copiar código
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Autor</title>
    <link rel="stylesheet" href="../style/pesquisar.css">
</head>
<body>
<main>
    <center><h1>Alteração de autor cadastrado</h1></center>
    <div class="separador"></div>

    <?php 
        $txtid = $_POST["cod_autor"];
        include_once("autor.php");
        $autor = new Autor();
        $autor->setCod_autor($txtid);   
        $autor_bd = $autor->alterar();
    ?>

    <form class="formcadastro" name="autor" method="POST" action="">
        <?php 
            if (!empty($autor_bd)) {
                foreach($autor_bd as $autor_mostrar) {
        ?>
        <fieldset>
            <input type="hidden" name="txtid" class="inpu" value="<?php echo $autor_mostrar[0]; ?>">

            <b><?php echo "ID =  " . $autor_mostrar[0]; ?></b>

            <p>Nome: <input class="inpu" name="txtnome" type="text" size="40" maxlength="40" value="<?php echo $autor_mostrar[1]; ?>" placeholder="Nome"></p>
            <p>Sobrenome: <input class="inpu" name="txtsobrenome" type="text" size="40" maxlength="40" value="<?php echo $autor_mostrar[2]; ?>" placeholder="Sobrenome"></p>
            <p>Email: <input class="inpu" name="txtemail" type="text" size="40" maxlength="40" value="<?php echo $autor_mostrar[3]; ?>" placeholder="Email"></p>
            <p>Data de Nascimento: <input class="inpu" name="txtnasc" type="date" size="40" maxlength="40" value="<?php echo $autor_mostrar[4]; ?>" placeholder="Data de Nascimento"></p>
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
                echo "<p>Nenhum autor encontrado com esse código.</p>";
            }
        ?>
    </form>

    <?php
        if (isset($_POST['btnenviar2'])) {            
            $cod_autor = $_POST["txtid"];
            $nome = $_POST["txtnome"];
            $sobrenome = $_POST["txtsobrenome"];
            $email = $_POST["txtemail"];
            $nasc = $_POST["txtnasc"];

            include_once 'autor.php';
            $autor = new Autor();
            $autor->setCod_autor($cod_autor);
            $autor->setNomeAutor($nome);
            $autor->setSobreNome($sobrenome);
            $autor->setEmail($email);
            $autor->setNasc($nasc);

            echo "<br><br><h3>" . $autor->alterar2() . "</h3>";
            header("Location: alterarAutor.php");
        }
    ?>
    
    <br>
</main>
</body>
</html>
