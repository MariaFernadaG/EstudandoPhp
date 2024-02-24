<?php
$calculoSalario = "";
if(isset($_POST)){
    $valorhora = $_POST['valorhora'];
    $hora = $_POST['hora'];
    $calculoSalario = $valorhora*$hora;
    echo $calculoSalario;

}



?>