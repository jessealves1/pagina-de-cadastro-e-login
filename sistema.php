<?php
    session_start();
    if((!isset($_SESSION['email']) == true) AND (!isset($_SESSION['senha']) == true )){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        $logado = $_SESSION['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagína de acesso</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    echo "<h1>Bem vindo $logado <h1>"
    ?>
    <div class="link-container">
        <a href="login.php">Sair</button>
    </div>
</body>
</html>