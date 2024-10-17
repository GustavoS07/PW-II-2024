<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Pesquisar.css">
    <title>Classe Pesquisar Autoria</title>
</head>
<body>
    <form name="autorias" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o código do autor ou livro:</b></legend>
            <p> Código Autor: <input name="txtCodAutor" type="text" size="20" maxlength="10" placeholder="Código do Autor">
            <p> Código Livro: <input name="txtCodLivro" type="text" size="20" maxlength="10" placeholder="Código do Livro">
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

                include_once 'autoria.php';
                $autoria = new Autoria();
                if (!empty($txtCodAutor)) {
                    $autoria->setCodAutor($txtCodAutor);
                }
                if (!empty($txtCodLivro)) {
                    $autoria->setCodLivro($txtCodLivro);
                }
                $autorias_bd = $autoria->pesquisar();
                foreach($autorias_bd as $autoria_mostrar)
                {
                    ?> <br>
                    <b> <?php echo $autoria_mostrar['0']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autoria_mostrar['1']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autoria_mostrar['2']; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b> <?php echo $autoria_mostrar['3']; ?> </b><br>
                   
                    <?php
                }
            }
            ?>

        </fieldset>
    </form>
    <center> <br><br><br><br><br><a href='../index.html' class='botao'>Voltar</a>
</body>
</html>
