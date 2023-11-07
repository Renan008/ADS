<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado - Valores em Ordem Crescente</title>
</head>
<body>
    <h1>Resultado - Valores em Ordem Crescente</h1>

    <?php
    if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $valores = array($valor1, $valor2, $valor3);
        sort($valores);

        echo "Valores em ordem crescente: " . implode(', ', $valores);
    } else {
        echo "Por favor, preencha todos os valores.";
    }
    ?>
    <br>
    <a href="ordemCrescente.html">Voltar</a>
</body>
</html>
