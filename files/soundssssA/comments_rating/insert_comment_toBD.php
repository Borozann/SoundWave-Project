<?php
include "../connection_bd.php";

$comment_text = $_POST["comment_text"];
$rating_id = $_POST["rating"] + 1;
$client_id = $_POST["client_id"];
$product_id = $_POST["product_id"];

$query_cart = "INSERT INTO comments (TEXT, ID_RATING, ID_PRODUCT, ID_CLIENT)
VALUES ('$comment_text', '$rating_id', '$product_id','$client_id')";

if ($conn->query($query_cart) === TRUE) {
    echo "Comentário Criado com sucesso";
} else {
    echo "Error: " . $query_cart . "<br>" . $conn->error;
}

$conn->close();
?>