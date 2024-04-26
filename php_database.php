<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL (normalmente é localhost)
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$database = "assinaturas_digitais"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
