<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página php</title>
</head>
<body>
    <?php 
    $mes=$_POST['NUM'];
    switch($mes){
        case 1:
            echo '<H1> <center>'."JANEIRO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 2:
            echo '<H1> <center>'."FEVEREIRO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 3:
            echo '<H1> <center>'."MARÇO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 4:
            echo '<H1> <center>'."ABRIL".'</H1> </center>';
            break;
    }
    switch($mes){
        case 5:
            echo '<H1> <center>'."MAIO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 6:
            echo '<H1> <center>'."JUNHO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 7:
            echo '<H1> <center>'."JULHO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 8:
            echo '<H1> <center>'."AGOSTO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 9:
            echo '<H1> <center>'."SETEMBRO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 10:
            echo '<H1> <center>'."OUTUBRO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 11:
            echo '<H1> <center>'."NOVEMBRO".'</H1> </center>';
            break;
    }
    switch($mes){
        case 12:
            echo '<H1> <center>'."DEZEMBRO".'</H1> </center>';
            break;
    }
    ?>
</body>
</html>