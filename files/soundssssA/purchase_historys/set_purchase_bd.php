<?php
// Connect BD
include "../connection_bd.php";

// Get ID
$id_client = $_GET['id_client'];

// Query Carts
$query_carts = "SELECT carts.WAS_PAID as was_paid, SUM(products.PRICE) as price, clientes.ID_CLIENT AS id_client FROM carts 
INNER JOIN products ON carts.ID_PRODUCT = products.ID_PRODUCT 
INNER JOIN clientes ON carts.ID_CLIENT = clientes.ID_CLIENT 
WHERE carts.ID_CLIENT='$id_client' AND carts.WAS_PAID = 'not paid'
GROUP BY carts.WAS_PAID, clientes.ID_CLIENT";

// Get result from query
$result = $conn->query($query_carts);
$row_cart = $result->fetch_assoc();
$total = $row_cart['price'];

// Set Variables for Insert
echo $row_cart['id_client'];
echo $row_cart['was_paid'];
echo $row_cart['price'];

// Insert purchase history 
$query_cart = "INSERT INTO purchase_history(PURCHASE_DATE, PURCHASE_TIME, ID_CLIENT, TOTAL_PAID) VALUES (NOW(), NOW(), '$id_client', '$total')";

//Check Insert
if ($conn->query($query_cart) === TRUE) {

    // Update 'WAS_PAID'
    $update_cart_items = "UPDATE carts SET WAS_PAID = 'paid' WHERE ID_CLIENT='$id_client'";

    // Check Update
    if ($conn->query($update_cart_items) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . $conn->error;
    }
    header("Location: see_purchase.php?id_client=$id_client");
} else {
    echo "Error: " . $query_cart . "<br>" . $conn->error;
}
?>