<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> calculadora</title>
</head>
<body>
    <?php
    $no1 = $_POST["noI"];
    $no2 = $_POST["noF"];
    $op = $_POST["OPR"];
    $result = 0;
    if($op == "+")
    {
        $result = $no1 + $no2;
    }

    if($op == "-")
    {
        $result = $no1 - $no2;
    }

    if($op == "*" || $op == "X" || $op == "x")
    {
        $result = $no1 * $no2;
    }

    if($op == "/")
    {
        $result = $no1 / $no2;
    }

    echo '<center><h1>'.$no1." ".$op." ".$no2." = ".$result;
    
    ?>
    <br>
    <center><a href="calculadora.html">voltar</a></center></h1>
</body>
</html>