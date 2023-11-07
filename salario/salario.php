<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de Salário - Resultado</title>
</head>
<body>
    <h1>Resultado do Cálculo de Salário</h1>

    <?php
    if(isset($_POST['horasTrabalhadas']) && isset($_POST['valorHora']) && isset($_POST['percentualDesconto'])) {
        $horasTrabalhadas = $_POST['horasTrabalhadas'];
        $valorHora = $_POST['valorHora'];
        $percentualDesconto = $_POST['percentualDesconto'];

       
        $salarioBruto = $horasTrabalhadas * $valorHora;

        
        $desconto = ($percentualDesconto / 100) * $salarioBruto;

        
        $salarioLiquido = $salarioBruto - $desconto;

        echo "Horas Trabalhadas: $horasTrabalhadas<br>";
        echo "Valor da Hora: $valorHora<br>";
        echo "Percentual de Desconto: $percentualDesconto%<br>";
        echo "Salário Bruto: R$ $salarioBruto<br>";
        echo "Valor do Desconto: R$ $desconto<br>";
        echo "Salário Líquido: R$ $salarioLiquido<br>";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>
    <br>
    <a href="salario.html">Voltar</a>
</body>
</html>
