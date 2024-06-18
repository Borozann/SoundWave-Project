<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrossel de Marcas</title>
<style>

* {
  
  margin:0;
}
div[style*="background-color: #16120F;"] {
  overflow: visible; /* Permite que os botões se estendam para fora */
  padding-left: 20px; /* Espaço para o botão esquerdo */
  padding-right: 20px; /* Espaço para o botão direito */box-sizing: border-box;
}
.carousel-container {
  width: calc(100vw - 40px); /* Subtraído o espaço desejado das laterais para não tocar as bordas da tela */
  overflow: hidden;
  position: relative;box-sizing: border-box;
  margin: 0 auto; /* Centraliza o carrossel */
}

.group-area {
  display: flex;
  flex-wrap: nowrap;
  transition: transform 0.3s ease-in-out;
  margin: 0px 20px 0px 20px;box-sizing: border-box;
}

.area {
  flex: 0 0 calc(20% - 40px); /* Ajusta para 5 áreas visíveis, considerando margem de 20px em cada lado */
  margin: 20px; /* Margem entre os itens */
  height: 115px;
  border: solid 1px #ffab04;
  border-radius: 10px;
  background-color: white;box-sizing: border-box;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  box-sizing: border-box;
}

.area img {
  max-width: 100%; /* A imagem preenche a largura da área */
  max-height: 100%; /* A imagem preenche a altura da área */
  object-fit: contain; /* A imagem é redimensionada para manter sua proporção */box-sizing: border-box;
}
/* Ajuste a posição dos botões para dentro do carrossel */
/* Ajuste a posição dos botões para dentro do carrossel */
.button1 {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: #ffffff;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  border: 1px solid #000;
  display: flex;
  justify-content: center;box-sizing: border-box;
  align-items: center;
  cursor: pointer;
  z-index: 3; /* Assegura que os botões fiquem acima das imagens */
}

.prev-button1 {
  left: 0; /* Aumenta o espaço à esquerda do botão 'Anterior' */box-sizing: border-box;
}

.next-button1 {
  right: 0; /* Aumenta o espaço à direita do botão 'Próximo' */box-sizing: border-box;
}
/* Estilo para as setas dos botões */
.button1::before {
  content: '';
  display: block;
  border: solid black;
  border-width: 0 3px 3px 0;
  padding: 3px;box-sizing: border-box;
}

.prev-button1::before {
  transform: rotate(135deg); /* Seta para a esquerda */
  -webkit-transform: rotate(135deg);box-sizing: border-box;
}

.next-button1::before {
  transform: rotate(-45deg); /* Seta para a direita */
  -webkit-transform: rotate(-45deg);box-sizing: border-box;
}

/* Ajuste no contêiner do carrossel para acomodar os botões */
.carousel-container {
  width: calc(100% - 480px); /* Reduz a largura para acomodar os botões fora */
  margin: auto;
  overflow: hidden;
  position: relative;box-sizing: border-box;
}


</style>
</head>
<body>

<div style="text-align:center">
  <h1 style="color:black; margin-bottom:0px; padding: 10px; width: 100%; font-size:40px;">MARCAS</h1>
</div>
<div style="align-items: center; width:100vw; background-color: #16120F; height:160px;">
  
  <div class="carousel-container">
    <button class="button1 prev-button1"></button>
    <div class="group-area">
    <div class="area"><img src="img/Ultimate_Ears_logo.png" alt=""></div>
<?php include 'card_once.php'; ?>
    </div>
    <button class="button1 next-button1"></button>
  </div>
  
</div>


<script>
  const carouselContainer = document.querySelector('.carousel-container');
  const prevButton = document.querySelector('.prev-button1');
  const nextButton = document.querySelector('.next-button1');
  const groupArea = document.querySelector('.group-area');
  let currentIndex = 0;

  nextButton.addEventListener('click', () => {
    if (currentIndex < document.querySelectorAll('.area').length - 5) {
      currentIndex++;
      translateCarousel();
    }
  });

  prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      translateCarousel();
    }
  });

  function translateCarousel() {
    const itemMargin = parseInt(window.getComputedStyle(document.querySelector('.area')).marginRight) * 2;
    const itemWidth = document.querySelector('.area').offsetWidth + itemMargin;
    const translateX = -currentIndex * itemWidth; // Move um 'itemWidth' por vez.
    groupArea.style.transform = `translateX(${translateX}px)`;
  }
</script>


</body>
</html>
