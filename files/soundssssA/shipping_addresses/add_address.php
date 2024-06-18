<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Endereço</title>
</head>

<body>
    <!-- Connection -->
    <?php
    include_once '../connection_bd.php';
    ?>
    <!-- Forms -->
    <h1>Criar endereço<br></h1>
    <form action="create_address_bd.php" method="post">
        <input type="text" placeholder="Nome de Perfil" name="profile_name"><br><br>
        <input type="text" placeholder="Endereço" name="address"><br><br>
        <input type="number" placeholder="Codigo-Postal" name="post_cod"><br><br>
        <input type="number" placeholder="Nº Telemovel" name="phone"><br><br>
        Id Cliente: 9
        <input type="checkbox" name="client_id" value="9" checked><br>
        <button>Criar Endereço</button>
</body>

</html>