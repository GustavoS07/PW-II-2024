<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma.php</title>
</head>
<body>
    <?php
    $A = $_POST ['numA'];
    $B = $_POST ['numB'];
    $SOMA = $A + $B;
    echo '<h1><center>'."A soma dos valores é ".$SOMA. '<br></h1>';
    
    if($SOMA>10)
    {
        echo '<font color="90ee90"> <h1> <center>'."a soma é maior que dez".'</font>';
    }
    else
    {
        echo '<font color="ff6961"><h1><center>'."a soma é menor que dez".'</font>';
    }
    ?>
</body>
</html>