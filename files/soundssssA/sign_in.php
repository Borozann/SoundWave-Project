
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <style>
          .error-message {
            position: fixed;
              color: red;
              font-family: 'Base Neue', sans-serif;
          font-size: 11px; /* Adjust the font size as needed */
          right: 612px;
    
          }
          .input-error {
    border: 2px solid red; /* Red border for error */
}
          #signin-container {
          /* Other styles... */
          text-align: left; /* Align text to the left */
      }

      p {
          font-family: 'Base Neue', sans-serif;
          font-size: 16px; /* Adjust the font size as needed */
      }

          /* Add your other styles here */
      </style>
  </head>
  <body>
      <!-- Connection -->
      <?php
      include_once 'connection_bd.php';
      include_once 'header.php';
      ?>

      <br><br>

      <!-- Forms -->
      <div class="center-container">
    <div id="signin-container-cap">
        <h1 id="brand">SoundWave</h1>
    </div>
    <div id="signin-container">
        <form action="verify_sing_in.php" method="post">
            <!-- Campo de Nome de Usuário -->
           <!-- Campo de Nome de Usuário -->
<input class="input" 
       type="text" 
       autocomplete="off" 
       placeholder="Username" 
       name="username"
       <?php if (isset($_SESSION['errors']['username_exists'])) echo 'style="border: 2px solid red;"'; ?>>

            <?php if (isset($_SESSION['errors']['username_exists'])): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($_SESSION['errors']['username_exists']); ?>
                </div>
                <?php unset($_SESSION['errors']['username_exists']); ?>
            <?php endif; ?>
            <br><br>

            <!-- Outros campos -->
            <input class="input" type="text" autocomplete="off" placeholder="Nome" name="name"><br><br>
            <input class="input" type="text" autocomplete="off" placeholder="SobreNome" name="surname"><br><br>
            <input class="input" type="email" autocomplete="off" placeholder="E-mail" name="email"><br><br>

            <!-- Campo de Senha -->
            <input class="input" <?php if (isset($_SESSION['errors']['password_mismatch'])) echo 'style="border: 2px solid red;"'; ?>" 
                   type="password" 
                   autocomplete="off" 
                   placeholder="Palavra-passe" 
                   name="pass" 
                   id="pass1">
            <br><br>

            <!-- Campo de Confirmação de Senha -->
            <input class="input" <?php if (isset($_SESSION['errors']['password_mismatch'])) echo 'style="border: 2px solid red;"'; ?>" 
                   type="password" 
                   autocomplete="off" 
                   placeholder="Confirme a Palavra-passe" 
                   name="confirm_pass" 
                   id="pass2">
            <?php if (isset($_SESSION['errors']['password_mismatch'])): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($_SESSION['errors']['password_mismatch']); ?>
                </div>
                <?php unset($_SESSION['errors']['password_mismatch']); ?>
            <?php endif; ?>
            <br><br>

            <button style="background-color:white; border-radius: 10px; color:black;
                    text-decoration:none;padding:4px 30px 4px 30px; cursor: pointer;" 
                    href="loja.php">
                <h2>CREATE ACCOUNT</h2>
            </button>
        </form>
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
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.querySelector('.input-error');
    if (input) {
        input.classList.add('justshake');
        setTimeout(function() { input.classList.remove('justshake'); }, 300);
    }
});
</script>