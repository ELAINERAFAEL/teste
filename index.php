<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confeitaria Artesanal</title>
    <link rel="shortcut icon" href="imagem/site.jpg">
    <title>COFEITARIA GABRIELA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include ('pages/header.php');
    ?>
    <section class="carrossel">
  <div class="slides">
    <img src="imagem/banner-dama-001.jpg" alt="Banner 1" class="slide active">
    <img src="imagem/banner-dama-004.jpg" alt="Banner 2" class="slide">
  </div>
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</section>
<script>
  const slides = document.querySelectorAll('.slide');
  const next = document.querySelector('.next');
  const prev = document.querySelector('.prev');
  let index = 0;

  function showSlide(i) {
    slides.forEach((slide, idx) => {
      slide.classList.toggle('active', idx === i);
    });
  }

  next.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    showSlide(index);
  });

  prev.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
  });

  setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
  }, 6000);
</script>
<section class="boas-vindas-container">
  <p class="boas-vindas">
    Seja bem-vindo<br>
    à Confeitaria Gabriela!<br>
    Cada doce é feito com amor e um toque artesanal especial.
  </p>
  
<section class="novidade">
  <header>
    <span>Novidade</span>
    <h1>Encontre a receita perfeita!</h1>
    <hr class="linha-central" />
    <h2>Explore uma variedade irresistível de receitas de doces feitas com carinho, sabor e um toque artesanal especial.</h2>
    <section class="cards-produtos">
  <div class="card">
    <img src="imagem/download (5).jpg" alt="Doce 1">
    <h3>Bolo de Doce de Leite</h3>
    <button onclick="window.location.href='contato.php'">Encomendar</button>
  </div>

  <div class="card">
    <img src="imagem/slk.jpg"Doce 2">
    <h3>Torta de Chocolate</h3>
    <button onclick="window.location.href='contato.php'">Encomendar</button>
  </div>

  <div class="card"> 
  <img src="imagem/Receitas Sofisticadas de Doces Finos Para Fazer e Arrasar.jpg" alt="Doce 3">
  <h3>Brigadeiros</h3>
  <button onclick="window.location.href='contato.php'">Encomendar</button>
</div>

</section>

  </header>
</section>
<?php
include ('pages/footer.php')
?>
</body>
</html>