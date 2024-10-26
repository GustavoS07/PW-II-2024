<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <style>
        body {
            background-color: #dadf4f; /* Cor de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        main {
            background-color: #ffffff; /* Cor de fundo da área de conteúdo */
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #4a4a4a; /* Cor do título */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #b0b0b0; /* Cor da borda */
            text-align: left;
        }

        th {
            background-color: #f2d95c; /* Cor do cabeçalho da tabela em tom de amarelo */
            color: #ffffff; /* Cor do texto do cabeçalho */
        }

        tr:nth-child(even) {
            background-color: #ffe9a7; /* Cor de fundo das linhas pares em tom mais claro de amarelo */
        }

        tr:nth-child(odd) {
            background-color: #fef7d4; /* Cor de fundo das linhas ímpares em tom muito claro de amarelo */
        }

        a.botao {
            display: inline-block;
            padding: 10px 15px;
            background-color: #f2d95c; /* Cor do botão "Voltar" em tom de amarelo */
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        a.botao:hover {
            background-color: #e6c52a; /* Cor do botão "Voltar" ao passar o mouse */
        }
    </style>
</head>
<body>
    <main>
        <h1>Relação de Produtos Cadastrados</h1>

        <?php 
        include_once 'produto.php';
        $p = new produto();
        $pro_bd = $p->listar();
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($pro_bd as $pro_mostrar) {
                    ?>
                    <tr>
                        <td><?php echo $pro_mostrar[0]; ?></td>
                        <td><?php echo $pro_mostrar[1]; ?></td>
                        <td><?php echo $pro_mostrar[2]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        
        <a href='../menu.html' class='botao'>Voltar</a>
    </main>
</body>
</html>
