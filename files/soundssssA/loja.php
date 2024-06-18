<?php
include "connection_bd.php";
include "header.php";
// include "preload.php";

?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SoundWave</title>
  <!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="loja.css" /> -->
</head>

<body>
  <style>
    .container {
      display: flex;
    }

    body {
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      min-height: 100vh;
    }

    .container-menu {
      display: flex;
      flex-grow: 1;
      min-width: 100vw;
    }

    .content-container {
      flex: 1;
      display: flex;
      justify-content: center;
      /* Center the content horizontally */
    }

    content {
      /* Adjust the width of the green area as needed */
      width: 80%;
      max-width: 800px;
      /* Set a maximum width if necessary */
      background-color: red;
      /* Green background for demonstration */
    }

    .left-nav {
      background-color: #EAEBEB;
      color: black;
      width: 200px;
      min-width: 200px;
      display: flex;
      flex-direction: column;
    }

    .left-nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .left-nav li {

      border-bottom: 1px solid #777;
      transition: background-color 0.3s;
      /* Adiciona transição suave na cor de fundo */
    }

    .left-nav li:hover {
      background-color: #666;
      /* Cor levemente mais clara quando o mouse passa por cima */
    }

    .left-nav a {
      padding: 1em;
      text-decoration: none;
      color: black;
      cursor: pointer;
      display: block;
    }
    .product-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}


    /*gnuifhgbufsjbuofnbjf bkjfsnjbfsnjbndfsnbdfnbijdfnbjodfsjbjofsjugvfjsjivjdihvudsidh*/
  </style>



  <div class="container-menu ">
    <nav class="left-nav">
      <ul>
        <li><a href="carts/add_cart.php">Speakers</a></li>
        <li><a href="#">HeadPhones</a></li>
        <li><a href="#">outro</a></li>
        <!-- Adicione mais opções conforme necessário -->
      </ul>
    </nav>
    <div class="content-container">
      <div class="content" id="content-1">
        <div style="display:flex; align-items: center; width:auto; background-color:grey;  height:50px">
          <div style="margin-right:10px">Pesquisar por preço maior</div>
          <div style="margin-right:10px">Pesquisar por preço menor</div>
          <div>
            <?php echo "id cliente: " . $_SESSION['id_client'] ?>
          </div>
        </div>
        <br><br><br><br>

        <div class="container product-container">
  <?php include "card.php"; ?>
</div>
        <br><br><br>
      </div>
    </div>










</body>

</html>