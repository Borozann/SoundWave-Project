<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Carousel</title>
  <!-- Adicione os links do Slick Carousel aqui -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick.min.js"></script>
</head>

<body>
  <?php include "connection_bd.php"; ?>
  <?php include "header.php"; ?>

  <video autoplay loop muted playsinline style=" width: 100%;
            height: auto;
            display: block;">
    <source src="JBL _ Charge 5 _ Portable Waterproof Speaker with Powerbank-(1080p).mp4" type="video/mp4">
    Seu navegador não suporta o elemento de vídeo.
  </video>


  <div class="container_cards">
    <div class="card-container">
      <img src="img/incon_security.png" style="width:40px; height:40px;" alt=""></img>
      <p>O nosso site é 100% seguro</p>
    </div>
    <div class="card-container">
      <img src="img/credit_icon.png" style="width:40px; height:40px;" alt=""></img>
      <p>Pagamento ate 12x no cartão</p>
    </div>
    <div class="card-container">
      <img src="img/shipping-logo.png" style="width:40px; height:40px;" alt=""></img>
      <p>Entregas até 2 semanas</p>
    </div>
    <div class="card-container">
      <img src="img/icon-packeges.png" style="width:40px; height:40px;" alt=""></img>
      <p>Devoluções até 1 mês</p>
    </div>
  </div>



  <br><br>
  <div style="     justify-content: center;
    align-items: center;">
    
    <div class="group-area">
      <div class="area"><img src="img/Ultimate_Ears_logo.png" alt=""></div>
      <div class="area"><img src="img/sonos-logo.png" alt=""></div>
      <div class="area"><img src="img/Bang-Olufsen-Logo.png" alt=""></div>
      <div class="area"><img src="img/aftershokz-logo.png" alt=""></div>
      <div class="area"><img src="img/beats-logo.png" alt=""></div>
    </div>
    
    <div class="group-area">
      <div class="area"><img src="img/bose-logo.png" alt=""></div>
      <div class="area"><img src="img/jbl-logo.png" alt=""></div>
      <div class="area"><img src="img/marshall-logo.png" alt=""></div>
      <div class="area"><img src="img/sony-logo.png" alt=""></div>
      <div class="area"><img src="img/skullcandy-log.png" alt=""></div>
    </div>
  
  </div>




<!-- 

  <div id="slider" class="slider" style="text-align: center;">
    <div class="wrapper">
      <div id="slides" class="slides">
        <span class="slide"><img src="img/carrocel2.jpg" alt=""></span>
        <span class="slide"><img src="img/carrocel1.jpg" alt=""></span>
        <span class="slide"><img src="img/carrocel3.jpg" alt=""></span>
        <span class="slide"><img src="img/carrocel4.jpg" alt=""></span>
      </div>
    </div>
    <a id="prev" class="control prev"></a>
    <a id="next" class="control next"></a>
  </div> -->




  <div class="foreground"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- Add more content as needed -->
  <?php include "footer.php"; ?>
</body>
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto');

  .area img {
    width: 100%;
    height: auto;
    margin: 0;
    display: block;
    transition: transform 0.3s ease-in-out;
    transform: scale(0.8);
  }

  .area {
    width: 240px;
    height: 120px;
    border: solid 1px #ffab04;
    margin: 20px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .area:hover img {
    transform: scale(1);
  }

  .area:hover {
    border: solid 1px black;
    cursor: pointer;
  }

  .group-area {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 10px 0;
  }




  .container_cards {
    display: flex;
    justify-content: center;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);

  }

  .card-container {
    align-items: center;
    display: flex;
    margin-right: 30px;
    margin-top: 10px;
    margin-left: 30px;
    margin-bottom: 10px;
    gap: 10px;
    text-align: center;
    /* Alinha o conteúdo no centro */
    /* Adiciona margem entre as divs, ajuste conforme necessário */

  }

  /* Adicione estilo para o cursor enquanto arrasta */
  body {
    margin: 0;
    padding: 0;
    background-color: white;
    color: #333;


  }

  /* /* @keyframes changeBackground {
      0%, 100% {
        background-image: url('img/fundo1.png');
      }
      50% {
        background-image: url('img/fundo2.jpg');
      } 
    } */
  .slider {
    position: relative;
    margin-top: 200px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1200px;
    /* Use valores diretos ao invés de variáveis SASS */
    height: 300px;
    /* Use valores diretos ao invés de variáveis SASS */
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
  }

  .wrapper {
    overflow: hidden;
    position: relative;
    width: 1200px;
    /* Use valores diretos ao invés de variáveis SASS */
    height: 300px;
    /* Use valores diretos ao invés de variáveis SASS */
    z-index: 1;
  }

  .slides {
    display: flex;
    position: relative;
    top: 0;
    left: -1200px;
    /* Use valores diretos ao invés de variáveis SASS */
    width: 10000px;

  }

  .slides.shifting {
    transition: left .2s ease-out;
  }

  .slide {
    width: 1200px;
    /* Substitua pelo valor desejado */
    height: 300px;
    /* Substitua pelo valor desejado */
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: all 1s;
    position: relative;
    background: #FFCF47;
    border-radius: 2px;
  }

  .slider.loaded {

    .slide:nth-child(2),
    .slide:nth-child(7) {
      background: #FFCF47
    }

    .slide:nth-child(1),
    .slide:nth-child(6) {
      background: #7ADCEF
    }

    .slide:nth-child(3) {
      background: #3CFF96
    }

    .slide:nth-child(4) {
      background: #a78df5
    }

    .slide:nth-child(5) {
      background: #ff8686
    }
  }

  .control {
    position: absolute;
    top: 50%;
    width: 50px;
    height: 50px;
    background: #fff;
    border-radius: 50px;
    margin-top: -20px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
    z-index: 2;
  }

  .prev,
  .next {
    background-size: 22px;
    background-position: center;
    background-repeat: no-repeat;
    cursor: pointer;
  }

  .prev {
    background-image: url('https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ChevronLeft-512.png');
    left: -20px;
  }

  .next {
    background-image: url('https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ChevronRight-512.png');
    right: -20px;
  }

  header {
    height: 80px;
    /* ou a altura desejada */
  }

  footer {
    height: 60px;
    /* ou a altura desejada */
  }

  .prev:active,
  .next:active {
    transform: scale(.8);
  }
</style>
<script>
  var slider = document.getElementById('slider'),
    sliderItems = document.getElementById('slides'),
    prev = document.getElementById('prev'),
    next = document.getElementById('next');

  function slide(wrapper, items, prev, next) {
    var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      firstSlide = slides[0],
      lastSlide = slides[slidesLength - 1],
      cloneFirst = firstSlide.cloneNode(true),
      cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;

    // Clone first and last slide
    items.appendChild(cloneFirst);
    items.insertBefore(cloneLast, firstSlide);
    wrapper.classList.add('loaded');

    // Mouse events
    items.onmousedown = dragStart;

    // Touch events
    items.addEventListener('touchstart', dragStart);
    items.addEventListener('touchend', dragEnd);
    items.addEventListener('touchmove', dragAction);

    // Click events
    prev.addEventListener('click', function() {
      shiftSlide(-1)
    });
    next.addEventListener('click', function() {
      shiftSlide(1)
    });

    // Transition events
    items.addEventListener('transitionend', checkIndex);

    function dragStart(e) {
      e = e || window.event;
      e.preventDefault();
      posInitial = items.offsetLeft;

      if (e.type == 'touchstart') {
        posX1 = e.touches[0].clientX;
      } else {
        posX1 = e.clientX;
        document.onmouseup = dragEnd;
        document.onmousemove = dragAction;
      }
    }

    function dragAction(e) {
      e = e || window.event;

      if (e.type == 'touchmove') {
        posX2 = posX1 - e.touches[0].clientX;
        posX1 = e.touches[0].clientX;
      } else {
        posX2 = posX1 - e.clientX;
        posX1 = e.clientX;
      }
      items.style.left = (items.offsetLeft - posX2) + "px";
    }

    function dragEnd(e) {
      posFinal = items.offsetLeft;
      if (posFinal - posInitial < -threshold) {
        shiftSlide(1, 'drag');
      } else if (posFinal - posInitial > threshold) {
        shiftSlide(-1, 'drag');
      } else {
        items.style.left = (posInitial) + "px";
      }

      document.onmouseup = null;
      document.onmousemove = null;
    }

    function shiftSlide(dir, action) {
      items.classList.add('shifting');

      if (allowShift) {
        if (!action) {
          posInitial = items.offsetLeft;
        }

        if (dir == 1) {
          items.style.left = (posInitial - slideSize) + "px";
          index++;
        } else if (dir == -1) {
          items.style.left = (posInitial + slideSize) + "px";
          index--;
        }
      };

      allowShift = false;
    }

    function checkIndex() {
      items.classList.remove('shifting');

      if (index == -1) {
        items.style.left = -(slidesLength * slideSize) + "px";
        index = slidesLength - 1;
      }

      if (index == slidesLength) {
        items.style.left = -(1 * slideSize) + "px";
        index = 0;
      }

      allowShift = true;
    }
  }

  slide(slider, sliderItems, prev, next);
</script>

</html>