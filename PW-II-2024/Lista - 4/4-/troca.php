<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>troca</title>
</head>
<body>
    <?php
    $A = $_POST ['numA'];
    $B = $_POST ['numB'];
    $A2 = $A ;

    $A = $B;
    $B = $A2;
    echo '<h1><center>'."A = ".$A. '<br></h1>';
    echo '<h1><center>'."B = ".$B. '<br></h1>';
    ?>
    <BR>
    <h1><center><a href="troca.html">voltar</a></center></h1>
</body>
</html>