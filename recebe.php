<?php
include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO `usuarios` (`email`, `senha`) VALUES ('$email','$senha')";
     if(mysqli_query($conn,$sql)){
        echo "$email cadastrado";
     }else
     echo "$email erro";

?>


