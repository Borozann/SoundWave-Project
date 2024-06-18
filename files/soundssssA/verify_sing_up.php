<?php
// Connection
include("connection_bd.php");

// Início da sessão
session_start();

// Get Variables
$user = $conn->real_escape_string($_POST['user']);
$pass = $conn->real_escape_string($_POST['pass']);

// Find USER
$sql = "SELECT * FROM clientes WHERE USERNAME = '$user' OR EMAIL = '$user'";
$result = $conn->query($sql);

// Check if exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify password
    if (password_verify($pass, $row['PASSWORD'])) {
        // Definir variáveis de sessão
        $_SESSION['login_error'] = false;
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;

        // Verificar se o usuário é um administrador
        $_SESSION['admin'] = ($row['ADMIN'] == 1);

        // Verificar se o ID do cliente está definido antes de armazená-lo na sessão
        if (isset($row['ID_CLIENT'])) {
            $_SESSION['id_client'] = $row['ID_CLIENT'];
        } else {
            // Tratar o caso em que o ID do cliente não está definido
            echo "Erro: ID do cliente não definido.";
            exit();
        }

        // Redirecionar para a página principal
        header("Location: index.php");
        exit();
    } else {
        // Senha incorreta
        $_SESSION['login_error'] = true;
        $_SESSION['login'] = false;
        header("Location: sign_up.php");
        exit();
    }
} else {
    // Usuário não encontrado
    $_SESSION['login_error'] = true;
    $_SESSION['login'] = false;
    header("Location: sign_up.php");
    exit();
}
?>
