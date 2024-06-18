<?php
include '../connection_bd.php';
$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$supplier = $_POST['supplier'];
$category = $_POST['category'];

$sql = ("UPDATE products SET NAME = '$name', PRICE = '$price', STOCK = '$stock', ID_SUPPLIER = '$supplier', ID_CATEGORY = '$category'
WHERE ID_PRODUCT= '$id'");

if (mysqli_query($conn, $sql)) {
  header("Location: dashboard_products.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>