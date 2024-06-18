<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- Connection -->

    <?php
    include_once 'connection_bd.php';
    include_once 'header.php';
    ?>
    <!-- Forms -->
    <br>
    <div class="center-container">

        <div id="signin-container-cap">
            <h1 id="brand">SoundWave</h1>
        </div>



        <div id="signin-container">

    <!-- Forms -->
    <form action="verify_sing_up.php" method="post">
       
    
    <input class="input" type="text" autocomplete="off" placeholder="Username" name="user"><br><br>
    <input class="input" type="password" autocomplete="off" placeholder="Palavra-passe" name="pass"><br><br>
    
                         
            
                      <button  style=" background-color:white; border-radius: 10px; color:black;
              text-decoration:none;padding:4px 30px 4px 30px ;   cursor: pointer;" href="loja.php"> <h2>LOG IN</h2>
   </button>
  
        </div>
    </div>

    <style>
         input[type="text"],
    input[type="email"],
    input[type="password"] {
        height: 40px;
        width: 100%; /* Defina a altura desejada aqui */
    }
          @font-face {
    font-family: 'Base Neue';
    src: url('Poppins_1/Poppins-Medium.ttf') format('truetype');

  }


  h1, p {
    font-family: 'Base Neue', sans-serif;
    
  }
#brand{
    position:relative;
    color: #16120F;
    left:10px;
}
        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* This makes the container take the full height of the viewport */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }


        #signin-container {
            width: 100%;
            height: 100%;
            max-width: 500px;
            max-height: 480px;
            background-color: #16120F;
            text-align: center;
            padding: 20px;
            border-radius: 0px 0px 10px 10px;
       
        }

        #signin-container-cap {
            width: 100%;
            height: 100%;
            max-width: 500px;
            max-height: 100px;
            background-color: #ffab04;
            text-align: start;
            border-radius: 10px 10px 0px 0px;
        }














        /* INPUT */
        .input {
  max-width: 250px;
  padding: 12px;
  border: none;
  border-radius: 4px;
  box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
  outline: none;
  color: dimgray;
}

.input:invalid {
  animation: justshake 0.3s forwards;
  color: red;
}

@keyframes justshake {
  25% {
    transform: rotate(5deg);
  }

  50% {
    transform: rotate(-5deg);
  }

  75% {
    transform: rotate(5deg);
  }
}