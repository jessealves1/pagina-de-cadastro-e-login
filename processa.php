<?php
$hostname= "localhost";
$usuario = "root";
$senha = "51759";
$nome_banco = "banco_p";
$conexao = new mysqli($hostname,$usuario,$senha,$nome_banco);

if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "INSERT INTO usuarios(cpf ,nome ,email , senha) VALUES ('$cpf','$nome','$email','$senha')");
}

?>