<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        body {
            background-color: red;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .centrer {
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
        }

        .profile-container {
           
            width: 60%; /* Ajuste a largura conforme necessário */
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            gap:100px;
            align-items: center;
        }

        .avatar {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            
        }

        .info {
            /* Adicione estilos para sua div de informações, se necessário */
        }
    </style>
</head>
<body>
    <?php include "header.php"?>

    <div class="centrer">
        <div class="profile-container">
            <div class="avatar"><img class="avatar" src="img/carrocel3.jpg" alt=""></div>
            <div class="info">
                <p>vnjdfsnvjds</p>
                <p>jfiodwjifdw</p>
                <p>mvkfnvklfnjlfs</p>
            </div>
            <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"pt","native_language_names":true,"detect_browser_language":true,"languages":["pt","en","fr","es","it","de"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"left","switcher_vertical_position":"top","alt_flags":{"en":"usa"}}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
            <!-- Adicione qualquer conteúdo adicional dentro desta div -->
        </div>
    </div>

    <?php include "footer.php"?>
</body>
</html>
