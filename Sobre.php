<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Confeitaria Gabriela - Nossa História</title>
 <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  <style>
    body {
      margin:0 ;
      font-family: Arial, sans-serif;
      background-color: #ffeef5;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      text-transform: uppercase;
      color: #c2185b;
      font-weight: bold;
      font-family: 'Dancing Script', cursive;
      font-size: 1.2em;
    }

    nav a:hover {
      color: #a0154a;
    }

    .nossa-historia-section {
      background-color: #ffeef5;
      padding: 50px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 80px;
    }

    .titulo-centralizado {
      font-family: 'Dancing Script', cursive;
      font-size: 2.5em;
      color: #c2185b;
      margin-bottom: 30px;
      text-align: center;
    }

    .card-historia {
      background-color: #fff;
      border: 2px solid #f8a8c4;
      border-radius: 15px;
      padding: 30px;
      max-width: 800px;
      width: 90%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      font-size: 1.1rem;
      line-height: 1.8;
      color: #444;
      text-align: justify;
    }

    h1 {
      font-family: 'Dancing Script', cursive;
      font-size: 2.5em;
      color: #c2185b;
      text-align: center;
      margin-top: 60px;
    }

    .cards-valores {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px 20px;
      gap: 20px;
    }

    .card {
      background-color: #fff;
      border: 2px solid #f8a8c4;
      border-radius: 15px;
      padding: 25px;
      width: 280px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card h2 {
      font-family: 'Dancing Script', cursive;
      color: #c2185b;
      font-size: 1.6em;
      margin-bottom: 15px;
      text-align: center;
    }

    .card p {
      font-size: 1em;
      color: #555;
      line-height: 1.6;
      text-align: justify;
    }
  </style>
</head>

<body>
    <?php
    include ('pages/header.php');
    ?>

  <section class="nossa-historia-section">
    <h2 class="titulo-centralizado">Conheça nossa história</h2>
    <div class="card-historia">
      <p>
        Nossa história começou entre cadernos e recreios, vendendo docinhos na escola para amigos e professores.
        O que era apenas uma forma simples de espalhar carinho logo se transformou em uma paixão sem volta.
        <br><br>
        Cada receita levava um pedacinho do nosso coração — e logo os pedidos cresceram, assim como o nosso sonho.
        Com o tempo, a cozinha da casa virou ateliê de sabores, os bilhetes de encomenda viraram agenda cheia,
        e o que era caseiro se tornou referência.
        <br><br>
        Hoje, somos a confeitaria mais querida de Telêmaco Borba. Mantemos a mesma essência de quando tudo começou:
        preparar delícias artesanais com amor, capricho e um toque especial de doçura em cada detalhe.
        <br><br>
        De brigadeiros que derretem na boca a bolos feitos sob medida para celebrar a vida,
        nossa missão é simples: adoçar seus momentos mais importantes com afeto e sabor.
      </p>
    </div>
  </section>

  <h1>Confeitaria - Valores e Visão</h1>

  <section class="cards-valores">
    <div class="card">
      <h2 class="emoji">🍰 Nossos Valores</h2>
      <p><strong>✨ Qualidade em cada detalhe:</strong> utilizamos ingredientes selecionados e prezamos pelo cuidado artesanal em cada receita.</p>
      <p><strong>💛 Respeito e acolhimento:</strong> valorizamos nossos clientes, colaboradores e fornecedores com empatia e carinho.</p>
      <p><strong>🌱 Sustentabilidade e ética:</strong> buscamos práticas conscientes e respeito ao meio ambiente.</p>
    </div>

    <div class="card">
      <h2 class="emoji">🎯 Nossa Visão</h2>
      <p><strong>"Adoçar momentos, encantar pessoas."</strong></p>
      <p>Queremos ser referência em sabor, criatividade e afeto. Mais do que vender doces, fazemos parte de lembranças felizes.</p>
    </div>

    <div class="card">
      <h2 class="emoji">🧁 Por que existimos</h2>
      <p><strong>Porque todo mundo merece um momento doce.</strong></p>
      <p>Transformamos ingredientes simples em experiências memoráveis. Cada preparo leva amor e dedicação.</p>
    </div>
  </section>
  <?php
  include ('pages/footer.php')
  ?>
</body>
</html>
