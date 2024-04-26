<?php
// Incluir arquivo de conexão com o banco de dados
include 'php_database.php';

// Consulta SQL para selecionar todos os funcionários
$sql = "SELECT * FROM funcionarios";
$result = $conn->query($sql);

// Verifica se há registros retornados
if ($result->num_rows > 0) {
    // Exibe os funcionários em uma tabela
    echo "<h2>Lista de Funcionários</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Cargo</th><th>Senha</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["email"]."</td><td>".$row["cargo"]."</td><td>".$row["senha"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum funcionário encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
