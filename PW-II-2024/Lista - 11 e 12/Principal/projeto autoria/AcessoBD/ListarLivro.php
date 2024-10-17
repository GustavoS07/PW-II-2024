<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tabelas.css">
    <title>Listar Livro</title>
</head>
<body>

    <center><font face="Century Gothic" size="6"><b>Livro</b><br><br><font size="4">
    
<?php

include_once "livro.php";
$a = new Livro();
$pro = $a->listar();

?>
<table class="estilo-tabela">
    <thead>
        <tr>
            <th>Cod_livro</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>ISBN</th>
            <th>Idioma</th>
            <th>QtdePag</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($pro as $pro_mostrar)
{
    echo "<tr>";
    echo "<td>" . $pro_mostrar['Cod_livro'] . "</td>";
    echo "<td>" . $pro_mostrar['Titulo'] . "</td>";
    echo "<td>" . $pro_mostrar['Categoria'] . "</td>";
    echo "<td>" . $pro_mostrar['ISBN'] . "</td>";
    echo "<td>" . $pro_mostrar['Idioma'] . "</td>";
    echo "<td>" . $pro_mostrar['QtdePag'] . "</td>";
    echo "</tr>";
}
?>
    </tbody>
</table>

<br><br>

<a href="../index.html">Voltar</a>
</body>
</html>
