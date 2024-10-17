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
    echo '<center><h1>';
    if($n1>$n2 && $n1>$n3)
    {
        if($n2<$n3)
        {
            echo $n1." E ".$n2;
        }
        
        else

        {
            echo $n1." E ".$n3;
        }
    }
    if($n2>$n3 && $n2>$n1)
    {
        if($n1>$n3)
        {
            echo $n2." E ".$n3;
        }
        else
        {
             echo $n2." E ".$n1;
        }
    }
    if($n3>$n2 && $n3>$n1)
    {
        if($n2>$n1)
        {
            echo $n3." E ".$n1;
        }
        else
        {
            echo $n3." E ".$n2; 
        }
    }
    ?>
<br>
    <center><a href="maioraomenor.html">voltar</a></center>
</body>
</html>