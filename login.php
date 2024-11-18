<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="form-container"><h1>Login</h1>
    <form action="teste.php" method="POST">
        <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" required>
        </div>
        <div class="form-group">
        <label>Senha:</label>
        <input type="password" name="senha" required>
        </div>
    <input type="submit" name="enviar" class="submit-btn"><br>
        <h3>Não tem login? 
        <div class="link-container">
            <a href="cadastro.php" >Cadastre-se</a></h3>
        </div>
    </div>
</body>
</html>
