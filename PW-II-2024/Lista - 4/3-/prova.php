<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $no1 = $_POST["not1"];
    $no2 = $_POST["not2"];
    $no3 = $_POST["not3"];
    $no4 = $_POST["not4"];
    $med = 0;

    $med = ($no1+$no2+$no3+$no4)/4; 

    if($med>=5)
    {
        echo '<center><h1>'."O aluno ".$nome." está aprovado com a média ".$med.", PARABÉNS!!!";
    }
    elseif($med>0)
    {
        echo '<center><h1>'."O aluno ".$nome." está reprovado com a média ".$med.", que decepção :(";
    }
    else
    {
        echo '<center><h1>'."Notas inválidas!!!! ";
    }
    ?>
    <br>
    <h1><center><a href="prova.html">voltar</a></center></h1>
</body>
</html>