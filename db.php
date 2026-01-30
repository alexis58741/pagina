<?php
$serverName = "localhost";
$database = "gestor_gastos";
$username = "alexis";
$password = "12345678";

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>