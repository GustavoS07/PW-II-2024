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
    $no2 = $_POST["noF"];
    if($no1>$no2)
    {
        for($i=$no1;$i>=$no2;$i--)
        {
            if($i % 2 !=0)
            {
                echo '<center><h1>'.$i.'</h1>';
            }
        }
    }
    else
    {
        for($i=$no2;$i>=$no1;$i--)
        {
            if($i % 2 !=0)
            {
                echo '<center><h1>'.$i.'</h1>';
            }
        }
    }
    ?>
    <br>
    <center><a href="decimp.html">voltar</a></center></h1>
</body>
</html>