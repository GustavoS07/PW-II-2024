<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página php</title>
</head>
<body>
    <?php
    $result = 0; 
    $val = $_POST["valor"];
    $descont = $_POST["desc"];

    $result = ($val/100)*$descont;
    $result = $val - $result;

    echo '<center><h1>'."Valor sem desconto: ".$val.'</h1></center>';
    echo '<center><h1>'."Valor com desconto: ".$result;  
    ?>
    <br>
    <h1><center><a href="desconto.html">voltar</a></center></h1>
</body>
</html>