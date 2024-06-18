<?php
include("../connection_bd.php");

$id_cart = $_GET["id"];
$id_client = $_GET["id_client"];

$sql = "DELETE FROM carts WHERE ID_CART = '$id_cart'";


$data = mysqli_query($conn, $sql);
if ($data) {
    header("Location: see_cart.php?id_client=9");
} else {
    echo "Erro ao tentar apagar registro da Base de Dados";
}
// header("Location: add_cart.php?");
?>