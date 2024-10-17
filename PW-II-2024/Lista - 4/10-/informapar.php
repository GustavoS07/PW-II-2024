<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php
    $no1 = $_POST["noI"];
    if($no1 % 2 != 0)
    {
        echo '<center><h1>'."O número ".$no1." é impar ";
    }
    else
    {
        echo '<center><h1>'."O número ".$no1." é par ";
    }
    ?>
    <br>
    <center><a href="informapar.html">voltar</a></center></h1>
</body>
</html>