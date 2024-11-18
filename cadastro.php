<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title>
</head>
<style> body {
    font-family: Arial, sans-serif;
   background-color: #d3d3d3;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   margin: 0;
  }

  .form-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    box-sizing: border-box;
    height: 500px;
  }

  .form-container h2 {
    text-align: center;
    color: #333;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    color: black;
  }

  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group input[type="password"],
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  .form-group textarea {
    resize: vertical;
  }

  .submit-btn {
    background-color: green;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
  }

  .submit-btn:hover {
    background-color: darkgreen;
  }

  .link-container {
   text-align: center;
   margin-top: 20px;
   }
   .link-container a {
   color: #007bff; /* Cor azul */
   font-size: 16px;
   text-decoration: none;
   font-weight: bold;
   }
   .link-container a:hover {
   text-decoration: underline;
   }
  </style>
<body >
   <div class="form-container">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
    <div class="form-group">
        <label >CPF:</label>
        <input type="text" name= "cpf" placeholder="Digite seu cpf" required>
      </div>
      <div class="form-group">
        <label >Nome:</label>
        <input type= "text" name="nome" placeholder="Digite o seu nome" required>
      </div>
      <div class="form-group">
        <label >E-mail:</label>
        <input type= "email" name="email" placeholder="Digite o seu email" required>
      </div>
      <div class="form-group">
         <label >Senha:</label>
         <input type="password" name="senha" placeholder="Digite sua senha" required>
      </div><br>
      <input type="submit" class= "submit-btn"value= "Cadastrar" name="submit">
      <br> 
      <div class="link-container">
         <a href="login.php">Faça o login</a>
      </div>
      
    </form>
  </div>
</body>
</html>
<?php

include_once('processa.php');
$hostname= "localhost";
$usuario = "root";
$senha = "51759";
$nome_banco = "banco_p";
$conexao = new mysqli($hostname,$usuario,$senha,$nome_banco);

if(isset($_POST['submit'])){
   $resultado = mysqli_query($conexao, "INSERT INTO usuarios(cpf ,nome ,email , senha) VALUES ('$cpf','$nome','$email','$senha')");
}
?>