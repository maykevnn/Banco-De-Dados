<?php
include "conexao.php";

if(isset($_POST['cadastra'])){
    $nome  = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $msg   = mysqli_real_escape_string($conexao, $_POST['msg']);

    $sql = "INSERT INTO tabela (nome, email, mensagem) VALUES ('$nome', '$email', '$msg')";
    mysqli_query($conexao, $sql) or die("Erro ao inserir dados: " . mysqli_error($conexao));
    header("Location: mural.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Mural de Pedidos</title>
<link rel="stylesheet" href="stylemural.css"/>
<script src="scripts/jquery.js"></script>
<script src="scripts/jquery.validate.js"></script>
<script>
$(document).ready(function() {
    $("#mural").validate({
        rules: {
            nome: { required: true, minlength: 4 },
            email: { required: true, email: true },
            msg: { required: true, minlength: 10 }
        },
        messages: {
            nome: { required: "Digite o seu nome", minlength: "O nome deve ter no mínimo 4 caracteres" },
            email: { required: "Digite o seu e-mail", email: "Digite um e-mail válido" },
            msg: { required: "Digite sua mensagem", minlength: "A mensagem deve ter no mínimo 10 caracteres" }
        }
    });
});
</script>
</head>
<body>
<div id="main">
  <header>
      <h1>Mural de Pedidos</h1>
  </header>

  <section id="formulario_mural">
      <form id="mural" method="post" novalidate>
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" placeholder="Seu nome"/>

          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Seu email"/>

          <label for="msg">Mensagem:</label>
          <textarea name="msg" id="msg" placeholder="Sua mensagem"></textarea>

          <input type="submit" value="Publicar no Mural" name="cadastra" class="btn"/>
      </form>
  </section>

  <section id="mural_de_pedidos">
  <?php
  $seleciona = mysqli_query($conexao, "SELECT * FROM tabela ORDER BY id DESC");
  if(mysqli_num_rows($seleciona) == 0){
      echo '<p class="nenhum-pedido">Nenhum pedido ainda. Seja o primeiro a publicar!</p>';
  } else {
      while($res = mysqli_fetch_assoc($seleciona)){
          echo '<article class="pedido">';
          echo '<div class="pedido-header">';
          echo '<h2>' . htmlspecialchars($res['nome']) . '</h2>';
          echo '<span class="email">' . htmlspecialchars($res['email']) . '</span>';
          echo '</div>';
          echo '<p class="mensagem">' . nl2br(htmlspecialchars($res['mensagem'])) . '</p>';
          echo '<small class="id">Pedido #' . $res['id'] . '</small>';
          echo '</article>';
      }
  }
  ?>
  </section>

  <footer>
    <p>&copy; <?= date('Y'); ?> Mural de Pedidos</p>
  </footer>
</div>
</body>
</html>
