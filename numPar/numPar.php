<!DOCTYPE html>
<html>
<head>
    <meta cahrset="utf-8">
    <title>Resultado - Verificar Paridade</title>
</head>
<body>
    <h1>Resultado - Verificar Paridade</h1>

    <?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "$numero é um número par.";
        } else {
            echo "$numero não é um número par.";
        }
    } else {
        echo "Por favor, preencha o campo de número.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
