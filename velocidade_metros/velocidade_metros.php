<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversão de Velocidade - Resultado</title>
</head>
<body>
    <h1>Resultado da Conversão de Velocidade</h1>

    <?php
    if(isset($_POST['velocidadeKmH'])) {
        $velocidadeKmH = $_POST['velocidadeKmH'];
        $velocidadeMS = $velocidadeKmH * (1000 / 3600); // Conversão de km/h para m/s

        echo "Velocidade em km/h: $velocidadeKmH km/h<br>";
        echo "Velocidade em m/s: $velocidadeMS m/s<br>";
    } else {
        echo "Por favor, preencha a velocidade em km/h.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
