<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma_quad</title>
</head>
<body>
    <?php
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    $n3 = $_POST['no3'];
    $result =($n1*$n1)+($n2*$n2)+($n3*$n3);

    echo '<h1><center>'."A soma dos quadrados dos 3 números é: ".$result;
    ?>
<br>
    <center><a href="soma_quad.html">voltar</a></center>
</body>
</html>