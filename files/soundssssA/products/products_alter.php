<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alterar Produto</title>
    <style>
        /* Estilos para o menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <?php
    $id = $_GET['id'];
    ?>
    <form action="products_alter_bd.php?id=<?php echo $id ?>" method="post">
        <h1>Alterar Produto</h1>
        <?php
        include "../connection_bd.php";
        $result = $conn->query("SELECT * FROM products where ID_PRODUCT = " . $id);
        $produto = mysqli_fetch_assoc($result);
        $supplier_get = "SELECT * FROM suppliers"; // Corrigido para fornecedores, ajuste conforme seu esquema de banco de dados.
        $result_supplier = $conn->query($supplier_get);
        ?>
        <input type='text' placeholder='Nome' name='name' value="<?php echo $produto['NAME'] ?>">
        <input type='text' placeholder='Preço' name='price' value="<?php echo $produto['PRICE'] ?>">
        <input type='text' placeholder='Stock' name='stock' value="<?php echo $produto['STOCK'] ?>">

        <!-- Dropdown para Categorie -->
        <?php
        $categorie_get = "SELECT * FROM categories"; // Corrigido para categories, ajuste conforme seu esquema de banco de dados.
        $result_categorie = $conn->query($categorie_get);
        ?>
        <select id="category" name="category">
            <?php
            if ($result_categorie->num_rows > 0) {
                while ($row = $result_categorie->fetch_assoc()) {
                    $selected_categorie = ($row['ID_SUPPLIER'] == $produto['ID_SUPPLIER']) ? 'selected' : '';
                    echo "<option value='" . $row['ID_CATEGORY'] . "' $selected_categorie>" . $row['NAME'] . "</option>";
                }
            }
            ?>
        </select>

        <!-- Dropdown para Supplier -->
        <select id="supplier" name="supplier">
            <?php
            if ($result_supplier->num_rows > 0) {
                while ($row = $result_supplier->fetch_assoc()) {
                    $selected_supplier = ($row['ID_SUPPLIER'] == $produto['ID_SUPPLIER']) ? 'selected' : '';
                    echo "<option value='" . $row['ID_SUPPLIER'] . "' $selected_supplier>" . $row['NAME'] . "</option>";
                }
            }
            ?>
        </select>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <h3><a href="dashboard_products.php">⟵Voltar para DashBoard Produtos</a></h3>
</body>

</html>