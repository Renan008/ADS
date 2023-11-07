<!DOCTYPE html>
<html>
<head>
    <meta cahrset="utf-8">
    <title>Resultado - Somatória de Números Inteiros</title>
</head>
<body>
    <h1>Resultado - Somatória de Números Inteiros</h1>

    <?php
    if(isset($_POST['numeroN'])) {
        $numeroN = $_POST['numeroN'];

        // Verifica se o valor de N é um número inteiro positivo
        if (is_numeric($numeroN) && $numeroN > 0) {
            $somatoria = 0;
            for ($i = 1; $i <= $numeroN; $i++) {
                $somatoria += $i;
            }

            echo "Valor de N: $numeroN<br>";
            echo "Somatória dos números inteiros de 1 a $numeroN: $somatoria<br>";
        } else {
            echo "Por favor, insira um valor válido de N (número inteiro positivo).";
        }
    } else {
        echo "Por favor, preencha o campo de valor N.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>

