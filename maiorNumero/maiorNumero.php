<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado - Maior Número</title>
</head>
<body>
    <h1>Resultado - Maior Número</h1>

    <?php
    if(isset($_POST['numeroA']) && isset($_POST['numeroB'])) {
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];

        if ($numeroA > $numeroB) {
            echo "O maior número é: $numeroA";
        } elseif ($numeroB > $numeroA) {
            echo "O maior número é: $numeroB";
        } else {
            echo "Os números são iguais: $numeroA";
        }
    } else {
        echo "Por favor, preencha ambos os números.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
