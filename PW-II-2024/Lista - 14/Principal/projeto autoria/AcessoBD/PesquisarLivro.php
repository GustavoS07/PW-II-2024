<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Classe Pesquisar Livro</title>
</head>
<body>
    <form name="livros" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o título do livro:</b></legend>
            <p> Título: <input name="txtTitulo" type="text" size="40" maxlength="100" placeholder="Título do Livro">
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

                include_once 'livro.php';
                $livro = new Livro();
                $livro->setTitulo($txtTitulo.'%');
                $livros_bd = $livro->pesquisar();
                foreach($livros_bd as $livro_mostrar)
                {
                    ?> <br>
                    <b> <?php echo $livro_mostrar['0']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $livro_mostrar['1']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $livro_mostrar['2']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $livro_mostrar['3']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $livro_mostrar['4']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $livro_mostrar['5']; ?> </b><br>
                   
                    <?php
                }
            }
            ?>

        </fieldset>
    </form>
    <center> <br><br><br><br><br><a href='../index.html' class='botao'>Voltar</a>
</body>
</html>
