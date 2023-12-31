<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <img src="img/Logo.png">
    <div class="form">
            <h1 class="login">Login</h1>
            <form method="post" action="{{ route('login') }}">
    @csrf
    <div class="email">
        <input type="text" name="USUARIO_EMAIL" placeholder="Digite seu e-mail">
    </div>

    <div class="senha">
        <input type="password" name="USUARIO_SENHA" placeholder="Digite sua senha">
    </div>

    <div class="botao">
        <button type="submit">Entrar</button>
    </div>
</form>
        <div class="lembrar">
            <label class="lembrar">Lembrar usuario</label>
            <input type="checkbox">
        </div>
        <div class="esqueceu">
            <a href="#">Esqueci minha senha</a> 
        </div>
    <div class="cadastro">
        <a href="#">Cadastrar-se</a>
    </div>
    </div>
</body>
</html>