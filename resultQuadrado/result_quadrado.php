<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Soma dos Quadrados - Resultado</title>
</head>
<body>
    <h1>Resultado da Soma dos Quadrados</h1>

    <?php
    if(isset($_POST['valorA']) && isset($_POST['valorB'])) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        $quadradoA = $valorA * $valorA;
        $quadradoB = $valorB * $valorB;
        $somaQuadrados = $quadradoA + $quadradoB;

        echo "Valor A: $valorA<br>";
        echo "Quadrado de A: $quadradoA<br>";
        echo "Valor B: $valorB<br>";
        echo "Quadrado de B: $quadradoB<br>";
        echo "Soma dos Quadrados: $somaQuadrados<br>";
    } else {
        echo "Por favor, preencha ambos os valores.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
