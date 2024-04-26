<?php
// Receber dados do formulário
$date = $_POST['date'];
$description = $_POST['description'];
$amount = $_POST['amount'];

// Validar dados (você pode adicionar validações adicionais aqui)

// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "assinaturas_digitais");

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inserir dados na tabela de relatórios de despesas
$sql = "INSERT INTO relatorios_despesas (data, descricao, valor) VALUES ('$date', '$description', $amount)";
if ($conn->query($sql) === TRUE) {
    echo "Relatório de despesas cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar relatório de despesas: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>
