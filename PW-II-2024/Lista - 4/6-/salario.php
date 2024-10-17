<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario</title>
</head>
<body>
    <?php
    $sal = $_POST['salario'];
    $re10 = (($sal/100)*10)+$sal;
    $re20 = $re10-(($re10/100)*20);

    echo '<center><h1>'."Salario bruto: ".$sal.'</h1></center>';
    echo '<center><h1>'."Salario com gratificação: ".$re10.'</h1></center>';
    echo '<center><h1>'."Salario com imposto de renda aplicado: ".$re20.'</h1></center>';  

    ?>
    <br>
    <h1><center><a href="salario.html">voltar</a></center></h1>
</body>
</html>