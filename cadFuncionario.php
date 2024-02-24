<?php
include("conexao.php");

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$id_curso = $_POST['id_curso']; // Certifique-se de obter corretamente o ID do curso do formulário

// Inserindo dados na tabela funcionarios
$sql_funcionario = "INSERT INTO `funcionarios`(`nome`, `cargo`, `salario`) VALUES ('$nome', '$cargo', '$salario')";

if (mysqli_query($conn, $sql_funcionario)) {
    $idfuncionario = mysqli_insert_id($conn); // Obtém o ID do funcionário recém-inserido

    // Inserindo dados na tabela de relacionamento funcionario_curso
    $sql_relacionamento = "INSERT INTO `funcionario_curso`(`idfuncionario`, `id_curso`) VALUES ('$idfuncionario', '$id_curso')";

    if (mysqli_query($conn, $sql_relacionamento)) {
        echo "$nome cadastrado com sucesso no curso";
    } else {
        echo "Erro ao cadastrar $nome no curso";
    }
} else {
    echo "Erro ao cadastrar $nome";
}

mysqli_close($conn);
?>
