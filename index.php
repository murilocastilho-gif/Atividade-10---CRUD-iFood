<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifood</title>
</head>
<body>
    <h1>Bem-vindo ao Ifood</h1>

    <button type="button" onclick="window.location.href='login.php'">Login</button>
    <button type="button" onclick="window.location.href='cadastro.php'">Cadastro</button>

    <br>

    <h2>Lista de Pedidos</h2>
    
    <table>
    
            <th>ID</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
    
    </table>

    <?php
include 'conexao.php';
    $sql = "SELECT * FROM pedidos";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $cliente['id'] . "</td>";
        echo "<td>" . $cliente['cliente'] . "</td>";
        echo "<td>" . $cliente['produto'] . "</td>";
        echo "<td>" . $cliente['quantidade'] . "</td>";
        echo "<td>" . $cliente['valor'] . "</td>";
        echo "</tr>";
    }
    $conn->close();
    ?>
</body>
</html>