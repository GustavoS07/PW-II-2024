<html>
<head>
 <title>função</title>
</head>
<body>
<?php
function escreve_separa($cadeia){
 for ($i=0;$i<strlen($cadeia);$i++){
 echo $cadeia[$i];
 if ($i<strlen($cadeia)-1)
 echo "-";
 }
}
escreve_separa ("Ola");
echo "<p>";
escreve_separa ("Texto mais comprido");
?>
</body>
</html>
