<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe pesquisar</title>
</head>
<body>
    <form name="produtos" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome do produto: </b></legend>
                <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto">
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

                include_once 'produto.php';
                $p = new produto();
                $p-> setNome($txtnome.'%');
                $pro_bd =$p->pesquisar();
                foreach($pro_bd as $pro_mostrar)
                    {
                        ?> <br>
                        <b> <?php echo $pro_mostrar[0]; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
                        <b> <?php echo $pro_mostrar[1]; ?> </b> &nbsp;&nbsp;&nbsp;&nbsp; 
                        <b> <?php echo $pro_mostrar[2]; ?> </b>   
                        <?php
                    }
            }
?>

        </fieldset>
        </form>
        <center> <br><br><br><br><br><a href='../index.html' class='botao'>Voltar</a>
</body>
</html>