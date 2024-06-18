<?php
include("../connection_bd.php");

$id = $_GET['id'];
$query = "DELETE FROM clientes WHERE ID_CLIENT = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    header("Location: ../dashboard_permanete.php");
} else {
    echo "Erro ao tentar apagar registro da Base de Dados";
}
?>