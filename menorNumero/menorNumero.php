<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado - Menor Número</title>
</head>
<body>
    <h1>Resultado - Menor Número</h1>

    <?php
    if(isset($_POST['numeroA']) && isset($_POST['numeroB']) && isset($_POST['numeroC'])) {
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];
        $numeroC = $_POST['numeroC'];

        $menorNumero = min($numeroA, $numeroB, $numeroC);

        echo "Número A: $numeroA<br>";
        echo "Número B: $numeroB<br>";
        echo "Número C: $numeroC<br>";
        echo "O menor número é: $menorNumero";
    } else {
        echo "Por favor, preencha todos os números.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
