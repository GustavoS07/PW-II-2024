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
    do{
        $tab = 2 * $i;
            echo '<center><h1>'.'2'. 'X' .$i. '=' .$tab.'</h1></center>'.'<br>';   
        $i++;
    }
    while($i<=10);

    ?>
    <br>
    <h1><center><a href="pt3.html">voltar</a></center></h1>
</body>
</html>