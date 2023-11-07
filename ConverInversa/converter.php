<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversão de Temperatura - Resultado</title>
</head>
<body>
    <h1>Resultado da Conversão</h1>

    <?php
    if(isset($_POST['tempFahrenheit'])) {
        $tempFahrenheit = $_POST['tempFahrenheit'];
        $tempCelsius = ($tempFahrenheit - 32) * (5 / 9);

        echo "Temperatura em Fahrenheit: $tempFahrenheit °F<br>";
        echo "Temperatura em Celsius: $tempCelsius °C<br>";
    } else {
        echo "Por favor, preencha a temperatura em Fahrenheit.";
    }
    ?>
    <br>
    <a href="conversao.html">Voltar</a>
</body>
</html>
