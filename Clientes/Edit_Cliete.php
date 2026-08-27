<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id = $id";
$cliente_editantes = $conn->query($sql);
$cliente = $cliente_editantes->fetch_assoc();