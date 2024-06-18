<?php
include("../connection_bd.php");
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM categories WHERE ID_CATEGORY = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    header("Location: dashboard_categories.php");
} else {
    echo "Erro ao tentar apagar categoria da Base de Dados";
}
?>