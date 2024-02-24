<?php
include("conexao.php");

$email = $_POST['emaillogin'];
$senha = $_POST['senhalogin'];

$query = "SELECT * FROM `usuarios` WHERE email='$email' AND senha='$senha'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    echo "SUCESSO";
} else {
    echo "FALHA";
}

$conn->close();
?>
