<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Troca de Valores - Resultado</title>
</head>
<body>
    <h1>Valores Trocados</h1>

    <?php
    if(isset($_POST['valorA']) && isset($_POST['valorB'])) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        // Realiza a troca de valores
        $temp = $valorA;
        $valorA = $valorB;
        $valorB = $temp;

        echo "Valor A após a troca: $valorA<br>";
        echo "Valor B após a troca: $valorB<br>";
    } else {
        echo "Por favor, preencha ambos os valores.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
