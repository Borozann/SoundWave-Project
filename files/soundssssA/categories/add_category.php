<?php
// Connection
include_once '../connection_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "Nome da Categoria" tem pelo menos 1 caractere
    if (isset($_POST["category"]) && strlen($_POST["category"]) >= 1) {
        // O campo atende ao critério, você pode processá-lo
        $nomeCategoria = $conn->real_escape_string($_POST["category"]);

        // Redireciona para outra página com a variável "category" como parâmetro
        header("Location: create_category.php?category=" . urlencode($nomeCategoria));
        exit();
    } else {
        echo "O campo 'Nome da Categoria' deve ter pelo menos 1 caractere.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>

<body>
    <!-- Forms -->
    <h1>LOGIN<br></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" placeholder="Nome da Categoria" name="category"><br><br>
        <button type="submit">Sing In</button>
    </form>
    <h3><a href="dashboard_categories.php">⟵Voltar</a></h3>
</body>

</html>
