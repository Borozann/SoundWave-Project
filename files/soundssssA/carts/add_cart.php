<?php
include "../connection_bd.php";

// Get ID Client
$id_client = 9;

// Show how many item does the Cart have
$carts = "SELECT COUNT(*) as total FROM carts WHERE ID_CLIENT = '$id_client' AND WAS_PAID = 'not paid'";
$result_carts = $conn->query("$carts");
$row_cart = $result_carts->fetch_assoc();
echo "Carrinho: " . $row_cart['total'];
echo "<a href=see_cart.php?id_client=$id_client><br>Ver Carrinho</a>";

// Show Each Product
$products = "SELECT * FROM products";
$result_product = $conn->query("$products");
if ($result_product->num_rows > 0) {
    // Output data of each row
    while ($row = $result_product->fetch_assoc()) {
        echo "<br><br>" . $row['NAME'] . "<br>";
        echo "Preço:" . $row['PRICE'] . "<br>";
        echo "Stock:";
        if ($row['STOCK'] > 0) {
            echo "Em Stock";
            $has_stock = True;
        } else {
            echo "Sem Stock";
            $has_stock = False;
        }
        // Forms
        echo "<br>";
        echo "<form action='add_cart_bd.php' method='post'>";
        echo "<input type='hidden' name='id_product' value='" . $row['ID_PRODUCT'] . "'>";
        echo "<input type='hidden' name='id_client' value='" . $id_client . "'>";

        // See if it has stock
        if ($has_stock == True) {
            echo "<input type='submit' value='Adicionar ao Carrinho'>";
        } else {
            echo "Indisponível";
        }
        echo "</form>";
    }
}
?>