<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página php</title>
</head>
<body>
    <?php 
    $i = 0;
    $num = $_POST["numX"];
    while($i<=10)
    {
        $tab = $num * $i;
            echo '<center><h1>'.$num. 'X' .$i. '=' .$tab.'</h1></center>'.'<br>';
        $i++;
    }
    ?>
    <br>
    <h1><center><a href="Tabuada.html">voltar</a></center></h1>
</body>
</html>