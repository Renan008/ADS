<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversor de Idade - Resultado</title>
</head>
<body>
    <h1>Resultado da Conversão de Idade</h1>

    <?php
    if(isset($_POST['idadeAnos'])) {
        $idadeAnos = $_POST['idadeAnos'];
        $idadeMeses = $idadeAnos * 12;
        $idadeSemanas = $idadeAnos * 52; // aproximadamente 52 semanas em um ano
        $idadeDias = $idadeAnos * 365; // aproximadamente 365 dias em um ano

        echo "Idade em anos: $idadeAnos anos<br>";
        echo "Idade em meses: $idadeMeses meses<br>";
        echo "Idade em semanas: $idadeSemanas semanas<br>";
        echo "Idade em dias: $idadeDias dias<br>";
    } else {
        echo "Por favor, preencha o campo de idade em anos.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
