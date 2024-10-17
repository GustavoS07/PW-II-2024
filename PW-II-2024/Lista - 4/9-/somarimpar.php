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
    $si = 0;
    if($no1>$no2)
    {
        for($i=0;$i<=$no1;$i++)
        {
            if($i % 2 !=0)
            {
                $si= $si+$i;
            }
        }
    }
    else
    {
        for($i=0;$i<=$no2;$i++)
        {
            if($i % 2 !=0)
            {
                $si= $si+$i;
            }
        }
    }
    echo '<center><h1>'."A soma dos números impares entre ".$no1." e ".$no2." é de: ".$si;
    ?>
    <br>
    <center><a href="somarimpar.html">voltar</a></center></h1>
</body>
</html>