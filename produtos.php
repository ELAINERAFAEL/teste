<!DOCTYPE html>
<html lang="pt-br">
<head>
    
  <meta charset="UTF-8" />
  <title>Home | Dona Confeitaria</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
      background-color: #fff0f5;
      color: #a6005a;
    }

    header {
      background-color: #fff0f5;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      gap: 20px;
    }

    header a img.imagem-redonda {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
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
      cursor: pointer;
    }

    nav a:hover {
      color: #d12e87;
      text-decoration: underline;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 30px 20px;
    }

    .produtos {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .produto-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(255, 192, 203, 0.3);
      padding: 20px;
      width: 280px;
      box-sizing: border-box;
      text-align: center;
      color: #a6005a;
      font-weight: bold;
      font-family: "Segoe UI", sans-serif;
      transition: transform 0.3s;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .produto-card:hover {
      transform: scale(1.05);
    }

    .produto-card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .produto-card h3 {
      margin: 0 0 10px 0;
      font-family: "Brush Script MT", cursive;
      font-size: 24px;
      color: #d12e87;
    }

    .produto-card p {
      font-weight: normal;
      font-size: 14px;
      margin: 0 0 15px 0;
      flex-grow: 1;
    }

    .btn-comprar {
      background-color: #d12e87;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 10px 15px;
      font-family: "Segoe UI", sans-serif;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-comprar:hover {
      background-color: #a6005a;
    }

    @media (max-width: 768px) {
      .produtos {
        flex-direction: column;
        align-items: center;
      }

      header {
        flex-wrap: wrap;
        justify-content: space-between;
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

    /* Mensagem popup não esquecer*/
    #msgProduto {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: #d12e87;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      box-shadow: 0 0 10px rgba(209, 46, 135, 0.8);
      font-family: "Segoe UI", sans-serif;
      font-size: 16px;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.5s;
      z-index: 1000;
    }
    #msgProduto.show {
      opacity: 1;
      pointer-events: auto;
    }
  </style>
</head>
<body>

  <?php
  include ('pages/header.php');
  ?>
  <div class="container">
    <h1 style="text-align:center; font-family:'Brush Script MT', cursive; color:#d12e87;">Nossos Produtos</h1>

    <div class="produtos">

      <div class="produto-card" onclick="mostrarMensagem('Bolo de Chocolate')">
        <img src="imagem/bolo decorado.jpg" alt="Bolo de Chocolate" />
        <h3>Bolo de Chocolate</h3>
        <p>Delicioso bolo de chocolate com cobertura cremosa.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Cupcake de Morango')">
        <img src="imagem/morango.jpg" alt="Cupcake de Morango" />
        <h3>Cupcake de Morango</h3>
        <p>Macios cupcakes recheados com creme de morango.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Torta de Limão')">
        <img src="imagem/torta de limão.jpg" alt="Torta de Limão" />
        <h3>Torta de Limão</h3>
        <p>Torta refrescante com massa crocante e creme de limão.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Biscoitos Sortidos')">
        <img src="imagem/Bolinhos sortidos.jpg" alt="Biscoitos Sortidos" />
        <h3>Biscoitos Sortidos</h3>
        <p>Biscoitos crocantes com variados sabores.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brigadeiro Gourmet')">
        <img src="imagem/Brigadeiro Ferrero Rocher aprenda agora.jpg" alt="Brigadeiro Gourmet" />
        <h3>Brigadeiro Gourmet</h3>
        <p>Brigadeiros feitos com chocolate belga premium.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Cheesecake de Frutas Vermelhas')">
        <img src="imagem/Cheesecake de frutas vermelhas.jpg" alt="Cheesecake de Frutas Vermelhas" />
        <h3>Cheesecake de Frutas Vermelhas</h3>
        <p>Cremoso cheesecake com cobertura de frutas vermelhas.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Pão de Mel Recheado')">
        <img src="imagem/Pão de mel personalizado.jpg" alt="Pão de Mel Recheado" />
        <h3>Pão de Mel Recheado</h3>
        <p>Pão de mel macio com recheio de doce de leite.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Macarons Coloridos')">
        <img src="imagem/macarons.jpg" alt="Macarons Coloridos" />
        <h3>Macarons Coloridos</h3>
        <p>Delicados macarons em vários sabores e cores.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brownie com Nozes')">
        <img src="imagem/Divino mini brownie!.jpg" alt="Brownie com Nozes" />
        <h3>Brownie com Nozes</h3>
        <p>Brownie fudgy com pedaços de nozes crocantes.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Tiramisu Tradicional')">
        <img src="imagem/Torta Tiramisù, per compleanno e feste speciali! (Ricetta veloce).jpg" alt="Tiramisu Tradicional" />
        <h3>Tiramisu Tradicional</h3>
        <p>Clássico tiramisu italiano com café e mascarpone.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

    </div>
  </div>

  <div id="msgProduto"></div>

  <script>
    function mostrarMensagem(nomeProduto) {
      const msg = document.getElementById('msgProduto');
      msg.textContent = `Você clicou em: ${nomeProduto}`;
      msg.classList.add('show');

      setTimeout(() => {
        msg.classList.remove('show');
      }, 2500);
    }
  </script>
<!-- Card de aviso não esquecer -->
<div id="aviso-encomendas" style="position: fixed; bottom: 30px; right: 30px; max-width: 320px; background: linear-gradient(135deg, #a6005a, #d12e87); color: white; border-radius: 20px 5px 20px 5px; box-shadow: 0 0 15px #d12e87; font-family: 'Segoe UI', sans-serif; font-weight: 700; font-size: 16px; padding: 20px 25px; cursor: default; animation: slideUpFadeIn 0.7s ease forwards; z-index: 9999;">

  <div style="display: flex; justify-content: space-between; align-items: center;">
    <div style="max-width: 260px;">
      <p style="margin: 0 0 8px 0; font-style: italic;">
        ⚠️ <span style="color: #fff8f5;">Trabalhamos <strong>somente por encomendas</strong>!</span>
      </p>
      <p style="margin: 0; font-weight: 400; font-size: 14px;">
        Faça seu pedido na <a href="contato.php" style="color: #fff8f5; text-decoration: underline;" target="_blank" rel="noopener noreferrer">página de contato</a>.
      </p>
    </div>
    <button onclick="document.getElementById('aviso-encomendas').style.display='none';" 
      aria-label="Fechar aviso" 
      style="background: transparent; border: none; color: #fff8f5; font-size: 20px; font-weight: bold; cursor: pointer; padding: 0 5px; margin-left: 10px; user-select: none; line-height: 1;">
      &times;
    </button>
  </div>
</div>

<style>
  @keyframes slideUpFadeIn {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  #aviso-encomendas button:hover {
    color: #ffcee8;
  }
</style>
<?php
include ('pages/footer.php')
?>
</body>

</html>