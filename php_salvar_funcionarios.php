<?php
// Incluir arquivo de conexão com o banco de dados
include 'php_database.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    // Verifica se os campos obrigatórios foram preenchidos
    if ($nome && $email && $cargo && $senha) {
        // Insere o novo funcionário no banco de dados
        $sql = "INSERT INTO funcionarios (nome, email, cargo, senha) VALUES ('$nome', '$email', '$cargo', '$senha')";
        if ($conn->query($sql) === TRUE) {
            echo "Funcionário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar funcionário: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos obrigatórios.";
    }
} else {
    echo "Método de requisição inválido.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
