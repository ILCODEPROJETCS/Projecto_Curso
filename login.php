<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.css">
    <title>Login</title>
    
</head>
<body class="loginCorpo">
    <div class="loginImg">
        <img src="img/logotipo.png" alt="logotipo">
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login">
        <h1>Fazer Login</h1> <br>
        <div class="cimaCriar">
            Não tem uma conta?<a href="Cadastramento.php">Criar conta</a>
        </div> <br>
        <div class="inputCaixa">
            <input type="email" id="email" name="email">
            <label for="email">E-mail:</label>
        </div>
        <div class="inputCaixa">
            <input type="password" id="senha" name="senha">
            <label for="senha">Senha:</label>
        </div>
        <a href="">Esqueci a minha senha</a><br><br>
       <div class="botao">
            <input type="submit" value="Entrar" id="btn"> <br><br>
       </div>
    </form> 
    <script src="all.js"></script>
    <script src="script.js"></script>
    <script src="login.js"></script>
    
</body>
</html>