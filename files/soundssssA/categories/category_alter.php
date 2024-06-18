<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alterar Categoria</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    ?>
    <form action="category_alter_bd.php?id=<?php echo $id ?>" method="post">
        <h1>Alterar Categoria</h1>
        <?php
        include "../connection_bd.php";
        $result = $conn->query("SELECT * FROM categories where ID_CATEGORY = " . $id);
        $category = mysqli_fetch_assoc($result);
        ?>
        <input type='text' placeholder='Nome' name='name' value="<?php echo $category['NAME'] ?>">
        <button>Salvar</button>

        <br>
        <h3><a href="dashboard_categories.php">⟵Voltar para DashBoard Categorias</a></h3>
</body>

</html>