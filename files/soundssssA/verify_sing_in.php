<?php
session_start();
include("connection_bd.php");

function usernameExists($conn, $username) {
    $sql = "SELECT * FROM clientes WHERE USERNAME = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows > 0;
        $stmt->close();
        return $exists;
    } else {
        // Tratamento de erros na preparação SQL
        return true; // Assumindo true para prevenir potenciais duplicatas em caso de erro SQL
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar variáveis do formulário
    $username = $_POST['username'] ?? '';
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['pass'] ?? '';
    $confirm_password = $_POST['confirm_pass'] ?? '';
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Inicializa o array de erros
    $_SESSION['errors'] = array();

    // Verifica se as senhas correspondem
    if ($password !== $confirm_password) {
        $_SESSION['errors']['password_mismatch'] = 'As senhas não correspondem.';
    }
    
    // Verifica se o nome de usuário existe
    if (usernameExists($conn, $username)) {
        $_SESSION['errors']['username_exists'] = 'O nome de usuário já está em uso.';
    }
    
    // Se houver erros, redireciona de volta ao formulário
    if (!empty($_SESSION['errors'])) {
        header("Location: sign_in.php");
        exit();
    }

    // Inserir o novo usuário
    $sql = "INSERT INTO clientes (USERNAME, NAME, SURNAME, EMAIL, PASSWORD, DATE_CREATION)
            VALUES (?, ?, ?, ?, ?, NOW())";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $username, $name, $surname, $email, $hash);

        // Verificar inserção
        if ($stmt->execute()) {
            // Redirecionar conforme necessário após o sucesso do cadastro
            header("Location: sign_up.php"); // Ajuste o redirecionamento conforme necessário
        } else {
            // Tratar erro de execução
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Tratar erro na preparação do SQL
        echo "Error: " . $conn->error;
    }
}

// Fechar conexão com o banco de dados
$conn->close();
?>
