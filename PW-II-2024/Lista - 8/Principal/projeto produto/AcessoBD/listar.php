<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <center><font face="Century Gothic" size ="6"><b>Relação de Produtos Cadastrados</b><br><br><font size = "4">
        <?php 
        include_once 'produto.php';
        $p = new produto();
        $pro_bd=$p->listar();
        ?>

        <b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp;Estoque</b>
        <?php 
        foreach($pro_bd as $pro_mostrar)
        {
            ?>
            <br><br>
            <b> <?php echo $pro_mostrar[0]; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp; 
            <?php echo $pro_mostrar[2]; ?>   
            <?php
        }
        echo "<br><br><a href='../index.html' class='botao'>Voltar</a>";
        ?>

</body>
</html>