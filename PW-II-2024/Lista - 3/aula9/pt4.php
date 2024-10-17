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
    echo '<center><h1>'."exibindo ordem crescente".'</h1></center>';
    
    for($i=1;$i<=5;$i++)
    {
            echo '<center><h2>'.$i.'</h2></center>'.'<br>';
    }
    
    echo '<center><h1>'."exibindo ordem decrescente".'</h1></center><br>';
    
    for($i=5;$i>=1;$i--)
    {
            echo '<center><h2>'.$i.'</h2></center>'.'<br>';
    }
    ?>
    <br>
</body>
</html>