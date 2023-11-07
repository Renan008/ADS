<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anos Bissextos - Resultado</title>
</head>
<body>
    <h1>Resultado - Anos Bissextos em um Intervalo</h1>

    <?php
    if(isset($_POST['anoInicio']) && isset($_POST['anoFim'])) {
        $anoInicio = $_POST['anoInicio'];
        $anoFim = $_POST['anoFim'];

        echo "Anos bissextos no intervalo de $anoInicio a $anoFim:<br>";

        for ($ano = $anoInicio; $ano <= $anoFim; $ano++) {
            if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
                echo "$ano ";
            }
        }
    } else {
        echo "Por favor, preencha ambos os campos de ano de início e ano de fim.";
    }
    ?>
    <br>
    <a href="inicio.html">Voltar</a>
</body>
</html>
