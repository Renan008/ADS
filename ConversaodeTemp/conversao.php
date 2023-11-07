<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversão de Temperatura - Resultado</title>
</head>
<body>
    <h1>Resultado da Conversão</h1>

    <?php
    if(isset($_POST['tempCelsius'])) {
        $tempCelsius = $_POST['tempCelsius'];
        $tempFahrenheit = (9 * $tempCelsius + 160) / 5;

        echo "Temperatura em Celsius: $tempCelsius °C<br>";
        echo "Temperatura em Fahrenheit: $tempFahrenheit °F<br>";
    } else {
        echo "Por favor, preencha a temperatura em Celsius.";
    }
    ?>
    <br>
    <a href="converter.html">Voltar</a>
</body>
</html>


