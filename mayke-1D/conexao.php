<?php

// Configurações do banco
$host    = "localhost";   // normalmente não precisa alterar
$usuario = "root";        // substituir se seu usuário não for root
$senha   = "";            // substituir se você tiver senha no MySQL
$banco   = "mayke_1d";       // substituir pelo nome do seu banco criado no phpMyAdmin

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
</head>
<body>
    <div class="logintxt"><h4>Login</h4></div>
    <form>
        <h3>Cadastro</h3>
        <div class="botao">
        <input type = "text" placeholder = "login" id = "login">
        <p><input type = "password" placeholder = "senha" id = "senha"></p>
        <p><input type = "email" placeholder = "email" id = "email"></p> 
        <p><input type = "number" placeholder = "number" id = "number"></p>
        <p><input type = "submit" onclick = "logar ()"; return false></p>
        </div>
        </form>

        <script>
            function logar () {
                var login = document.getElementById("login").value;
                var password = document.getElementById("senha").value;
                var email = document.getElementById("email").value;
                var number = document.getElementById("number").value;
                if (login == "admin" && senha == "admin") {
                    location.href="home.html";
                } else {
                    alert("usuario ou senha incorretos");
                }

</body>
</html>