<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tabelas.css">
    <title>Listar Autoria</title>
</head>
<body>

    <center><font face="Century Gothic" size="6"><b>Autoria</b><br><br><font size="4">
    
    <?php
    include_once "Autoria.php";
    $a = new Autoria();
    $pro = $a->listar();
    ?>
    
    <table class="estilo-tabela">
        <thead>
            <tr>
                <th>Cod_autor</th>
                <th>Cod_livro</th>
                <th>Data Lançamento</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pro as $pro_mostrar) {
                echo "<tr>";
                echo "<td>" . $pro_mostrar['Cod_autor'] . "</td>";
                echo "<td>" . $pro_mostrar['Cod_livro'] . "</td>";
                echo "<td>" . $pro_mostrar['Data_lancamento'] . "</td>";
                echo "<td>" . $pro_mostrar['Editora'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <br><br>
    <a href="../index.html">Voltar</a>

</body>
</html>
