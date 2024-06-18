<?php
include "../connection_bd.php";

// Verifique se o formulário foi enviado
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];
    $supplier = $_POST['supplier'];

    // Verifique se um arquivo de imagem foi enviado
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image = $_FILES['image'];

        // Diretório onde você deseja salvar a imagem
        $uploadDir = 'imagens_produtos/';

        // Verifique se o diretório de destino existe ou crie-o
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Nome do arquivo (pode ser personalizado se desejar)
        $fileName = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);

        // Caminho completo para salvar o arquivo
        $filePath = $uploadDir . $fileName;

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($image['tmp_name'], $filePath)) {
            // O arquivo foi enviado com sucesso

            // Agora você pode armazenar $filePath no banco de dados
            // para referenciar a imagem associada a este produto

            // Exiba a imagem do produto
            echo '<h2>Imagem do Produto:</h2>';
            echo '<img src="' . $filePath . '" alt="Imagem do Produto"><br>';
            echo $filePath;

            // Resto do seu código para inserir os dados no banco de dados
            // ...

            // Mensagem de confirmação
            $sql = "INSERT INTO products(NAME, IMAGE, DESCRIPTION, PRICE, STOCK, ID_SUPPLIER, ID_CATEGORY) 
            VALUES ('$name','$filePath','$description','$price','$stock','$supplier','$category')";
            $result = $conn->query($sql);

            header("Location: ../dashboard_permanete.php");
        } else {
            echo 'Erro ao fazer o upload da imagem.';
        }
    } else {
        echo 'Nenhum arquivo de imagem enviado.';
    }
}
?>