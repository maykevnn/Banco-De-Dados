<?php
// Configurações do banco
$host    = "localhost";   // normalmente não precisa alterar
$usuario = "root";        // substituir se seu usuário não for root
$senha   = "";            // substituir se você tiver senha no MySQL
$banco   = "mayke_1d";    // substituir pelo nome do seu banco criado no phpMyAdmin

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="logintxt">
        <h4>Login</h4>
        <p><h3>Cadastro</h3></p>
    </div>
    <form onsubmit="logar(); return false;">
        <div class="lg">
            <input type="text" placeholder="Login" id="login">
            <p><input type="password" placeholder="Senha" id="senha"></p>
            <p><input type="email" placeholder="Email" id="email"></p> 
            <p><input type="number" placeholder="Número" id="number"></p>
            <p><input type="submit" value="Entrar"></p>
        </div>
    </form>

    <script>

        function logar() {
            var login = document.getElementById("login").value;
            var password = document.getElementById("senha").value;
            var email = document.getElementById("email").value;
            var number = document.getElementById("number").value;

            
            if (login == "admin" && password == "admin") {
                location.href = "home.html";
            } else {
                alert("Usuário ou senha incorretos");
            }
        }
    </script>
</body>
</html>
