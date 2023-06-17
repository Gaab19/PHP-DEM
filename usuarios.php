<?php
include("conexao.php");

// Consulta para recuperar os nomes dos usuários cadastrados
$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    // Exibe os nomes dos usuários cadastrados
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>