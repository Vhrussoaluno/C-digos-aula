<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entrada, Processamento e Saída</title>
    <style>
        body {
            background: linear-gradient(120deg, #8e2de2, #4a00e0);
            font-family: Arial, sans-serif;
            color: white;
            padding-top: 40px;
            text-align: center;
        }
        .box {
            background: rgba(0,0,0,0.3);
            padding: 20px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
            backdrop-filter: blur(4px);
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Resultado</h2>
    <?php
    $numero = 10;

    if ($numero > 10) {
        echo "$numero é maior que 10.";
    } elseif ($numero < 10) {
        echo "$numero é menor que 10.";
    } else {
        echo "$numero é igual a 10.";
    }
    ?>
</div>

</body>
</html>