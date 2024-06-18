<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto</title>
</head>

<body>
    <?php
    include "../connection_bd.php";

    $supplier_get = "SELECT * FROM suppliers";
    $result_supplier = $conn->query($supplier_get);

    $categorie_get = "SELECT * FROM categories";
    $result_categorie = $conn->query($categorie_get);
    ?>
    <h1>Criar Produto</h1>

    <form action="products_add_bd.php" method="post" enctype="multipart/form-data">
        Nome
        <input type="text" name="name" placeholder="..."><br><br>
        <label for="image">Selecionar arquivo de imagem:</label>
        <input type="file" name="image" id="image"><br><br>
        Descrição
        <input type="text" name="description" placeholder="..."><br><br>
        Preço
        <input type="number" name="price" placeholder="Exemplo: 0.00"><br><br>
        Stock
        <input type="number" name="stock" placeholder="Stock"><br><br>
        Categoria
        <select id="category" name="category">
            <?php
            if ($result_categorie->num_rows > 0) {
                while ($row = $result_categorie->fetch_assoc()) {
                    $selected_categorie = ($row['ID_CATEGORY'] == $produto['ID_CATEGORY']) ? 'selected' : '';
                    echo "<option value='" . $row['ID_CATEGORY'] . "' $selected_categorie>" . $row['NAME'] . "</option>";
                }
            }
            ?>
        </select><br><br>

        Fornecedor
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
        <button type="submit" name="submit" value="Upload">Criar</button>
    </form>

</body>

</html>