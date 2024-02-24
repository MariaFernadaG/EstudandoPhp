<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "pessoas";
$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
} else {
    echo "Conectado";
}
?>
