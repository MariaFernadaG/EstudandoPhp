<?php
$calculoSalario = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['cargo'])) {
    }
    if (isset($_POST['valorhora']) && isset($_POST['hora'])) {
        $valorhora = $_POST['valorhora'];
        $hora = $_POST['hora'];
        $calculoSalario = $valorhora * $hora;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastrar Funcionarios</title>
    <script>
        // Função para calcular o salário
        // document.getElementById para pegar um elemento especifico
        function calcularSalario() {
            var valorhora = document.getElementById('valorhora').value;
            var hora = document.getElementById('hora').value;
            var resultado = valorhora * hora;
            document.getElementById('salario').value = resultado;
        }
    </script>
</head>
<body>
    <form method="POST" action="cadFuncionario.php">
        <div class="elementos">
            <h1>Cadastrar Funcionarios</h1>
            <div class="input-group">
                <input name="nome" type="text" placeholder="Nome">
            </div>
            <div class="input-group">
                <input name="cargo" type="text" placeholder="Cargo">
            </div>
            <div class="input-group">
                <input name="id_curso" type="text" placeholder="Curso">
            </div>
            <div class="input-group">
                <input type="text" id="salario" name="salario" value="<?php echo $calculoSalario; ?>" readonly>
            </div>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <form onsubmit="calcularSalario(); return false;">
        <div class="input-group">
            <input id="valorhora" name="valorhora" type="int" placeholder="Valor aula">
        </div>
        <div class="input-group">
            <input id="hora" name="hora" type="int" placeholder="Horas">
        </div>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
