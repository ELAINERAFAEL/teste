<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novidades</title>
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

      /* Mensagem popup não esquecer */
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
</head>
<body>

  <?php include ('pages/header.php'); ?>

  <div class="container">
    <h1 style="text-align:center; font-family:'Brush Script MT', cursive; color:#d12e87;">
      Especial Mês dos Namorados 💗
    </h1>

    <div class="produtos">

      <div class="produto-card" onclick="mostrarMensagem('Combo Dois Sabores')">
        <img src="imagem/barra rosa (1).jpg" alt="Combo Dois Sabores" />
        <h3>Combo Dois Sabores</h3>
        <p>Combo Dois Sabores o clássico brigadeiro de chocolate e o beijinho crocante unidos em uma explosão de sabor que conquista corações! 💕</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Bolo Quatro Leites')">
        <img src="imagem/bolo.jpg" alt="Bolo Quatro Leites" />
        <h3>Bolo Quatro Leites</h3>
        <p>Bolo Quatro Leites maciez e cremosidade que derretem na boca e fazem seu dia mais doce.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brigadeiro')">
        <img src="imagem/coraçaorosa.jpeg" alt="Brigadeiro" />
        <h3>Brigadeiro</h3>
        <p>Brigadeiro o clássico que nunca sai de moda e sempre adoça a vida!</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brigadeiro de morango com chocolate')">
        <img src="imagem/morango.jpeg" alt="Brigadeiro de morango com chocolate" />
        <h3>Brigadeiro de morango com chocolate</h3>
        <p>Brigadeiro de morango com chocolate a combinação perfeita que derrete coraçõe</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Fondue Premium')">
        <img src="imagem/fundue (2).jpg" alt="Fondue Premium" />
        <h3>Fondue Premium</h3>
        <p>Fondue Premium o sabor sofisticado que transforma cada momento em uma doce celebração.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brigadeiro de Beijinho Crocante')">
        <img src="imagem/caixinha.jpeg" alt="Brigadeiro de Beijinho Crocante" />
        <h3>Brigadeiro de Beijinho Crocante</h3>
        <p>Brigadeiro de Beijinho Crocante uma delícia irresistível que vai conquistar seu paladar!</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Combo Fondue')">
        <img src="imagem/fundue.jpg" alt="Combo Fondue" />
        <h3>Combo Fondue</h3>
        <p>uma deliciosa experiência para compartilhar sabores irresistíveis e momentos doces a dois.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Combo premium')">
        <img src="imagem/barra rosa (7).jpeg" alt="Combo premium" />
        <h3>Combo premium</h3>
        <p>Combo Premium: barra de chocolate com morango em formato de coração, caixinha de brigadeiros artesanais e um mimo especial para adoçar ainda mais o seu momento</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Brigadeiro tiedye')">
        <img src="imagem/barra rosa (3).jpeg" alt="Brigadeiro tiedye" />
        <h3>Brigadeiro tiedye</h3>
        <p>Brigadeiro tiedye para adoçar o seu momento.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

      <div class="produto-card" onclick="mostrarMensagem('Combo 5 sabores que encantam seu amor')">
        <img src="imagem/barra rosa (5).jpeg" alt="Combo 5 sabores" />
        <h3>Combo 5 sabores</h3>
        <p>Combo 5 sabores que encantam seu amor.</p>
        <a href="contato.php" class="btn-comprar" onclick="event.stopPropagation()">Comprar</a>
      </div>

    </div>
  </div>

  <div id="msgProduto"></div>

  <script>
    
    function mostrarMensagem(nomeProduto) 
      const msg = document<div id="msgProduto"></div>

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
      
