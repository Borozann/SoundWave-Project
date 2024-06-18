<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SoundWave</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<?php include "connection_bd.php";
session_start();
?>

<body>
  <header class="main-header">
    <div class="logo" style="margin-left:20px; ">

      <a style="text-decoration:none; color:#ffab04;" href="../../soundssssA/index.php"><h2>SoundWave<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>-admin
      <?php } ?></a>
      </h2>
    </div>
    <!-- parte da direita -->

<div class="header-right">
    
<ul style="display: flex; list-style: none; margin: 0; padding: 0; ">

      
      
       
   
  <li class="header-link" style="margin-top:9px">
    <?php if (isset($_SESSION['user'])) { ?>
 <div class="menu-button">
  <a style="margin-right: 0;"><span class="material-symbols-outlined">person</span> <?php echo $_SESSION['user']; ?></a>

</div>
  <div class="menu hidden">
    <ul>
    <li style=""class="cor header-link no-underline"><a href="perfil.php">Perfil</a></li>
    <li class=" "><a href="fatura.php">Configurações</a></li>
    <li class=" "><a href="../../soundssssA/purchase_historys/see_purchase.php">historico de compras</a></li>
    <li class=" "><a href="logout.php">Sair</a></li>
    </ul>
  </div>
<?php } else { ?>
  <div class="login-container">
    <a href="sing_up.php">Login/</a>
    <a href="sing_in.php">Sign up</a>
  </div>
<?php } ?>
</li>   

</ul>
    
      
     
      

  





</div>
     

  </header>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".menu-button").click(function(event) {
        event.stopPropagation(); // Impede a propagação do clique para o documento
        $(".menu").toggleClass("hidden");
      });

      $(document).click(function(event) {
        if (!$(event.target).closest(".menu-container").length) {
          $(".menu").addClass("hidden");
        }
      });
    });
  </script>
  <style>
    .profile-button {
      cursor: pointer;
    }
  </style>






  <style>

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 10,
  'opsz' 24;

  font-size: 40px; 

  ;}
.menu-button {
  display: flex;
  align-items: center;
}

.menu-button a {
  margin: 0;
  padding: 0;
  text-decoration: none;
  display: flex;  /* Adicione este estilo para garantir que o ícone e o texto estejam em linha */
  align-items: center;  /* Alinha verticalmente o ícone e o texto */
}

.menu-button span {
  font-size: 1.2em; /* Ajuste conforme necessário para o tamanho do ícone */
  margin-right: 5px; /* Adicione margem entre o ícone e o texto conforme necessário */
}

 .header-right ul li.header-link {
    list-style: none;

    /* margin-right: 20px; */
   
}

.header-right ul li.header-link a {
    position: relative;
    text-decoration: none;
    color: white; /* Cor do texto - ajuste conforme necessário */
}

.header-right ul li.header-link a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: -5px;
    left: 0;
    background-color: #ffab04; /* Cor do sublinhado - ajuste conforme necessário */
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
}

.header-right ul li.header-link a:hover:before {
    visibility: visible;
    transform: scaleX(1);
}
  /* Adiciona animação de desaparecimento do sublinhado ao retirar o mouse */


    .logo {
      font-size: 1.5em;
      font-weight: bold;
    }

    .header-right a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 20px;
    }

    /* fudshuifhduihfuiduhis */


    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }


    .main-header {
      justify-content: space-between;
      background-color: #16120F;
      color: white;
      display: flex;
      align-items: center;
      padding-top: 10px;
      padding-bottom: 10px;
      height: 60px;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .header-logo h2 {
      margin: 0;
    }

    .nav-container ul {
      list-style: none;
      display: flex;
    }

    .nav-container ul li {
      margin-right: 20px;
      font-size: 20px;
    }

    .nav-container ul li:last-child {
      margin-right: 0;
      font-size: 20px;
    }

    .nav-container ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .menu {
      position: absolute;
      top: 10px;
      right: 20px;
      background-color: #16120F;
      border: 1px  solid #ccc;
      padding: 5px;
      transform: translateY(-2%);
      /* Move a área para cima */
      margin-top:53px;
      /* Remove margem */
      
      /* Adiciona display flex para eliminar espaçamento interno */
    }

    .menu ul {
     
      list-style: none;
      padding: 0;
  
   
    } 
    
    .menu li{
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .menu  li a:hover {
 
      /* Define a cor do texto como azul ao passar o mouse sobre os links */
    }

    .hidden {
      display: none;
    }
  </style>



</body>

</html>