<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Registre-se<br>E entre para o nosso time</h1>
            <img src="filmezinho.svg" class="left-login-image" alt="filmezinho">
        </div>
        <div class="right-login">
                <div class="card-login">
                    <h1>Cadastro</h1>
            <form action="registro.php" method="POST">
                    <div class="textfield">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" maxlength="140" placeholder="Nome" required>
                    </div>
                    <br>
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" maxlength="140" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" maxlength="16" placeholder="Senha" required>
                    </div>
                    <br>
                    <div class="textfield">
                        <label for="senha">Repita sua senha</label>
                        <input type="password" id="check-senha" name="check-senha" maxlength="16" placeholder="Repita sua Senha" required>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit">
                    <br><br>
                    <div class="links">
                        Já possui uma conta? <a href="index.html">Faça Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>