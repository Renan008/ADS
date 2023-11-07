<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quadrado da Soma - Resultado</title>
</head>
<body>
    <h1>Resultado do Quadrado da Soma</h1>

    <?php
    if(isset($_POST['valorA']) && isset($_POST['valorB'])) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        $soma = $valorA + $valorB;
        $quadradoSoma = $soma * $soma;

        echo "Valor A: $valorA<br>";
        echo "Valor B: $valorB<br>";
        echo "Soma: $soma<br>";
        echo "Quadrado da Soma: $quadradoSoma<br>";
    } else {
        echo "Por favor, preencha ambos os valores.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
