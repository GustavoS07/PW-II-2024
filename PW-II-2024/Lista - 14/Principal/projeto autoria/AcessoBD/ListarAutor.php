<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tabelas.css">
    <title>Listar Autores</title>
</head>
<body>

    <center><font face="Century Gothic" size="6"><b>Autores</b><br><br><font size="4">
    
    <?php
    include_once "autor.php";
    $a = new autor();
    $pro = $a->listar();
    ?>
    
    <table class="estilo-tabela">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pro as $pro_mostrar) {
                echo "<tr>";
                echo "<td>" . $pro_mostrar['Cod_autor'] . "</td>";
                echo "<td>" . $pro_mostrar['NomeAutor'] . "</td>";
                echo "<td>" . $pro_mostrar['SobreNome'] . "</td>";
                echo "<td>" . $pro_mostrar['Email'] . "</td>";
                echo "<td>" . $pro_mostrar['Nasc'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <br><br>
    <a href="../menu.html">Voltar</a>

</body>
</html>
