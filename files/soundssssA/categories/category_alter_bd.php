<?php
include '../connection_bd.php';
$id = $_GET['id'];
$name = $_POST['name'];

$sql = ("UPDATE categories SET NAME = '$name' WHERE ID_CATEGORY= $id");

if (mysqli_query($conn, $sql)) {
  header("Location: dashboard_categories.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>