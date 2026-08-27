<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente removido com sucesso!";
    } else {
        echo "Erro ao remover cliente: " . $conn->error;
    }
}
?>