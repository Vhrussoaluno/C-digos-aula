<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loop PHP</title>
    <style>
        body {
            background: linear-gradient(135deg, #4b79a1, #283e51);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding-top: 60px;
        }
        .box {
            background: rgba(255, 255, 255, 0.15);
            padding: 25px;
            width: 300px;
            margin: auto;
            border-radius: 12px;
            backdrop-filter: blur(6px);
            box-shadow: 0 0 10px #00000055;
        }
        p {
            margin: 8px 0;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Contagem com Loop</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>Número: $i</p>";
    }
    ?>
</div>

</body>
</html>