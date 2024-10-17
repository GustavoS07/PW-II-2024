<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de dados dos alunos.php</title>

</head>
<body>
    <?php
         echo "SEGUE ABAIXO AS INFORMAÇÕES DIGITADAS NA PAGINA ANTERIOR".'<br>';
         echo "nome digitado...: ".$_POST['txtnome'].'<br>';
         echo "telefone...: ".$_POST['txttelefone']. '<br>';
         echo "Curso...: ".$_POST ['cbocursos']. '<br>';
         echo "RG...: ".$_POST ['txtRG']. '<br>';
         echo "módulo...: ".$_POST['txtmodulo']. '<br>'
    
    ?>    

</body>
</html>