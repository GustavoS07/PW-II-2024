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
    while($i<=10)
    {
        $tab = 2 * $i;
            echo '<center><h1>'.'2'. 'X' .$i. '=' .$tab.'</h1></center>'.'<br>';
        $i++;
    }
    ?>
    <br>
    <h1><center><a href="pt1.html">voltar</a></center></h1>
</body>
</html>