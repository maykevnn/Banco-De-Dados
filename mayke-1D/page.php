<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="logintxt">
            <h4>Login</h4>
            <p><h3>Cadastro</h3></p>
        </div>
        <form onsubmit="logar(); return false;">
            <div class="lg">
                <input type="text" placeholder="Login" id="login">
                <p><input type="password" placeholder="Senha" id="senha"></p>
                <p><input type="email" placeholder="Email" id="email"></p> 
                <p><input type="submit" value="Entrar"></p>
            </div>
        </form>
    </div>

    <script>
        function logar() {
            var login = document.getElementById("login").value;
            var password = document.getElementById("senha").value;
            var email = document.getElementById("email").value;
            
            if (login == "admin" && password == "admin") {
                location.href = "page.html";
            } else {
                alert("Usuário ou senha incorretos");
            }
        }
    </script>
</body>
</html>
