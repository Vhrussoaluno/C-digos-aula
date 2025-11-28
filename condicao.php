<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Condição</title>
    <style>
        body {
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding-top: 60px;
        }
        .box {
            background: rgba(0,0,0,0.35);
            padding: 25px;
            width: 320px;
            margin: auto;
            border-radius: 12px;
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Verificação de Idade</h2>
    <?php
    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }
    ?>
</div>

</body>
</html>