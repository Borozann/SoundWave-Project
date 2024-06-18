<?php
//Connect bd
include("connection_bd.php");

//Get Variables
$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$senha = $_POST['pass'];
$hast = password_hash($senha, PASSWORD_DEFAULT);

//Insert to BD
$sql = "INSERT INTO clientes (USERNAME, NAME, SURNAME, EMAIL, PASSWORD , DATE_CREATION)
        VALUES ('$username', '$name', '$surname', '$email', '$hast', NOW())";

//Check Insert
if ($conn->query($sql) === TRUE) {
  header("Location: sign_up.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
$conn->close();
?>
