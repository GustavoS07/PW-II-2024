<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acao - RECEBIMENTO DE DADOS DE UM FORMULARIO</title>
</head>
<body>
    <?php 
    $Vnome=$_POST["nome"]; // atribuindo o texto da caixa de texto "nome" a variavel a variavel "$Vnome"
    $Vidade=$_POST["idade"]; // atribuindo o texto da caixa de texto "idade" a variavel a variavel "$idade"
    echo "Oi !! " .$Vnome. "." . "<br>" . "Você tem " .$Vidade. " anos !!";
    ?>
</body>
</html>