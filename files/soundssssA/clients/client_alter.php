<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alterar Registro</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    ?>
    <form action="client_alter_bd.php?id=<?php echo $id ?>" method="post">
        <h1>Alterar Registro</h1>
        <?php
        include "../connection_bd.php";
        $result = $conn->query("SELECT * FROM clientes where ID_CLIENT = " . $id);
        $cliente = mysqli_fetch_assoc($result);
        ?>
        <input type='text' placeholder='Username' name='user' value="<?php echo $cliente['USERNAME'] ?>">
        <input type='text' placeholder='Nome' name='name' value="<?php echo $cliente['NAME'] ?>">
        <input type='text' placeholder='Sobrenome' name='surname' value="<?php echo $cliente['SURNAME'] ?>">
        <input type='email' placeholder='Email' name='email' value="<?php echo $cliente['EMAIL'] ?>">
        <button>Salvar</button>

        <br>
        <h3><a href="dashboard_clients.php">⟵Voltar para DashBoard Clientes</a></h3>
</body>

</html>