<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/Login.css">
    <script language="javascript">
        function letras(keypress) {
            return (keypress >= 48 && keypress <= 57);
        }
    </script>
</head>

<body>
    <div class="container">
        <fieldset>
            <h1>Login</h1>
            <form method="post">
                <p>Usuário: <input name="txtUser" type="text" size="20" maxlength="20" required></p>
                <p>Senha: <input name="txtSenha" type="password" size="20" maxlength="11" onkeypress="return letras(window.event.keyCode)" required></p>
                <div class="center-text">
                    <input name="btnConsultar" type="submit" value="Consultar" class="botao">
                </div>
            </form>
        </fieldset>

        <?php
            extract($_POST, EXTR_OVERWRITE); 
            if(isset($btnConsultar)) {
                include_once 'AcessoBD/Login.php';
                $us = new Usuario();
                $us->setLogi($txtUser);
                $us->setSenha($txtSenha);
                $pro_bd = $us->Logar();     
                $existe = false;
                foreach($pro_bd as $pro_mostrar) {
                    $existe = true;
                    echo "<fieldset class='bem-vindo-msg'>";
                    echo "<p class='bem-vindo-text'>Bem-vindo ". $pro_mostrar[0] . "!</p>";
                    echo '<div class="center-text"><a href="menu.html"><button class="botao">Entrar</button></a></div>';
                    echo "</fieldset>";
                }
                if($existe == false) {
                    header("location:LoginI.html");
                }
            }
        ?>
    </div>
</body>
</html>
