<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "carros";


$conn = new mysqli($servername, $username, $password, $database);

$nome = $_POST['nome'];

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO carro(nome) VALUE('$nome')";
$result = $conn->query($sql);


$conn->close();
?>
