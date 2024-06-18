<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #imageContainer {
      width: 300px;
      height: 200px;
      overflow: hidden;
    }

    .image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: opacity 1s ease-in-out;
    }
  </style>
</head>
<body>

<div id="imageContainer">
<img src="img/produto1.jpg" alt="Image 1">
    <img src="img/speaker.jpg" alt="Image 2">
  <!-- Adicione mais imagens conforme necessário -->
</div>

<script>
  const images = document.querySelectorAll('.image');
  let currentIndex = 0;

  function showNextImage() {
    images.forEach(image => {
      image.style.opacity = '0';
    });

    images[currentIndex].style.opacity = '1';

    currentIndex = (currentIndex + 1) % images.length;

    setTimeout(showNextImage, 2000); // Mude para 2000 milissegundos (2 segundos)
  }

  showNextImage(); // Inicie a exibição automática de imagens
</script>

</body>
</html>
