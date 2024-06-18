<?php
include "../connection_bd.php";

$id_client = $_POST['id_client'];
$id_product = $_POST['id_product'];

$sql = "INSERT INTO carts(WAS_PAID,QUANTITY,ID_CLIENT,ID_PRODUCT)
 VALUES ('not paid',1,'$id_client','$id_product')";

//Check Insert
if ($conn->query($sql) === TRUE) {
    header("Location: ../loja.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>