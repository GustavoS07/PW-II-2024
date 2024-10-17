<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Classe Pesquisar Autor</title>
</head>
<body>
    <form name="autores" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome do autor:</b></legend>
            <p> Nome: <input name="txtNomeAutor" type="text" size="40" maxlength="40" placeholder="Nome do Autor">
            <br><br><center>
                <input name="btnEnviar" type="submit" value="Pesquisar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        </fieldset>

        <br>
        <fieldset id="b">
            <legend><b>Resultado:</b></legend>

            <?php 
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnEnviar)){

                include_once 'autor.php';
                $a = new Autor();
                $a->setNomeAutor($txtNomeAutor.'%');
                $autores_bd = $a->pesquisar();
                foreach($autores_bd as $autor_mostrar)
                {
                    ?> <br>
                    <b> <?php echo $autor_mostrar['0']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autor_mostrar['1']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autor_mostrar['2']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autor_mostrar['3']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autor_mostrar['4']; ?> </b><br>
                   
                    <?php
                }
            }
            ?>

        </fieldset>
    </form>
    <center> <br><br><br><br><br><a href='../index.html' class='botao'>Voltar</a>
</body>
</html>
