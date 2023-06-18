<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>E entre para o nosso time</h1>
            <img src="filmezinho.svg" class="left-login-image" alt="filmezinho">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="testLogin.php" method="POST">
                    <br>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <br>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Login">
                    <br><br>
                    <div class="links">  
                        Não tem uma conta? <a href="registro.html">Registre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>