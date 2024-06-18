<?php
//Connect bd
include("../connection_bd.php");

//Get Variables
$category = $_GET['category'];

if (strlen($category) >= 1) {
    //Insert to BD
    $sql = "INSERT INTO categories (NAME) VALUES ('$category')";


    //Check Insert
    if ($conn->query($sql) === TRUE) {
        echo "Categoria criado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    echo "<h3><a href='dashboard_categories.php'>⟵Voltar Dashboard </a></h3>";
    
} else {
    echo 'ERRO: Precisa no minimo 1 caracter... 🙁';
    echo "<h3><a href='add_category.php'>⟵Voltar</a></h3>";
}

?>