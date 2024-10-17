<head>
    <title>PHP_Aula Exemplo do Uso de váriaveis</title>
</head>
<body>
    <?php 
        // Declarando varíaveis 
        $var1 = 1; // inteiro
        $varX = 9.50; //ponto flutuante
        $varY = 9.50; // ponto flutuante
        $var2 = $varX + $varY; // recebendo o resultado de uma expressão
        $varSRT = "Atribui String"; // variável texto - string
        $varletra = "a"; // variável caracter
        $varbool = true; // atribuição lógica
    
        echo "Exemplo de uma aplicação em PHP";
        print "<p>";

        echo"Conteúdo de var1: ";
        echo $var1;
        print"<p>";
    
        echo "Conteúdo de varX: ";
        echo $varX;
        print "<p>";

        echo"Conteúdo de varY: ";
        echo $varY;
        print"<p>";

        echo"Conteúdo de varSRT: ";
        echo $varSRT;
        print"<p>";

        echo"Conteúdo de varletra: ";
        echo $varletra;
        print"<p>";

        echo"Conteúdo de varbool: ";
        echo $varbool;
    ?>

    </body>
</html>