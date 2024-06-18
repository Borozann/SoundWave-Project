<?php
session_start();

// Destruir todas as variáveis de sessão
session_unset();
session_destroy();

// Redirecionar para a página de login
header("Location: index.php");
exit();
?>