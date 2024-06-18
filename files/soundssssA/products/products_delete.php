<?php
include("../connection_bd.php");
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM products WHERE ID_PRODUCT = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    header("Location: dashboard_products.php");
} else {
    echo "Erro ao tentar apagar registro da Base de Dados";
}
?>