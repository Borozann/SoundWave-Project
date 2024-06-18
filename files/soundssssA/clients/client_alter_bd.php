<?php
include '../connection_bd.php';
$id = $_GET['id'];
$username = $_POST['user'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$sql = ("UPDATE clientes SET USERNAME = '$username', NAME = '$name', SURNAME = '$surname',
EMAIL = '$email' WHERE ID_CLIENT= $id");

if (mysqli_query($conn, $sql)) {
  header("Location: ../dashboard_permanete.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>