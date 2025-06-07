<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Contato | Dona Confeitaria</title>
  <style>
    
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
      background-color: #fff0f5; 
      color: #a6005a;
    }
    
    nav {
      display: flex;
      gap: 25px;
      font-family: "Brush Script MT", cursive, "Segoe UI", sans-serif; 
      font-size: 18px;
      font-weight: normal;
    }

    nav a {
      text-decoration: none;
      color: #a6005a;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #d12e87;
      text-decoration: underline;
    }

    .container {
      max-width: 1000px;
      margin: 80px auto;
      padding: 30px 20px;
    }

    .perfil {
      text-align: center;
      margin-bottom: 40px;
    }

    .foto-perfil {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #ffc0cb;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      display: inline-block;
    }

    .descricao {
      margin-top: 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .conteudo {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
    }

    .bloco {
      flex: 1 1 300px;
      background-color: #fff;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(255, 192, 203, 0.3);
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #d12e87;
    }

    .bloco a {
      display: block;
      text-align: center;
      margin: 10px 0;
      padding: 12px;
      border-radius: 8px;
      background-color: #ffe4e1;
      color: #a6005a;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .bloco a:hover {
      background-color: #ffc0cb;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input, textarea {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ffc0cb;
      border-radius: 8px;
      font-size: 15px;
      resize: vertical;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #ffb6c1;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #d12e87;
    }

    
    @media (max-width: 768px) {
      .conteudo {
        flex-direction: column;
      }

      header {
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 10px 15px;
      }

      nav {
        gap: 15px;
        font-size: 16px;
        margin-top: 10px;
        width: 100%;
        justify-content: flex-end;
      }
    }
  </style>
</head>
<body>
  <?php
    include ('pages/header.php');
    ?>

  <div class="container">
    <div class="perfil">
      <img src="imagem/WhatsApp Image 2025-06-03 at 09.42.49.jpeg" alt="Confeiteira Gabriela" class="foto-perfil" />
      <p class="descricao">Confeiteira Gabriela, 22 anos, de Telêmaco Borba 🍰</p>
    </div>

    <div class="conteudo">
      <div class="bloco">
        <h2>Redes sociais</h2>
        <a href="https://instagram.com/gabrielaoliveira_confeitaria" target="_blank">📸 Instagram</a>
        <a href="https://wa.me/554298004018" target="_blank">📱 WhatsApp</a>
        <p style="text-align:center; margin-top:20px;">Fale com a gente nas redes ou mande uma mensagem!</p>
      </div>

      <div class="bloco">
        <h2>Envie uma mensagem</h2>
        <form action="mailto:seuemail@exemplo.com" method="POST" onsubmit="return validarEmail()">
          <input type="text" name="nome" placeholder="Seu nome" required />
          <input type="email" id="email" name="email" placeholder="Seu e-mail" required />
          <textarea name="mensagem" placeholder="Digite sua mensagem..." rows="5" required></textarea>
          <input type="submit" value="Enviar" />
        </form>
      </div>
    </div>
  </div>

  <script>
    function validarEmail() {
      const email = document.getElementById("email").value;
      if (!email.includes("@")) {
        alert("Por favor, insira um e-mail válido com @.");
        return false;
      }
      return true;
    }
  </script>
<?php
include ('pages/footer.php')
?>
</body>
</html>
