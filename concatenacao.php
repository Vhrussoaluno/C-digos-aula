<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Concatenação</title>
    <style>
        body {
            background: #222;
            color: #f5f5f5;
            text-align: center;
            padding-top: 60px;
            font-family: Arial;
        }
        .card {
            background: #333;
            width: 320px;
            padding: 20px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 10px #000;
        }
        h2 { color: #00eaff; }
    </style>
</head>
<body>

<div class="card">
    <h2>Nome Completo</h2>
    <?php
        $primeiroNome = "Gisbert";
        $sobrenome = "Santos";
        $nomeCompleto = $primeiroNome . " " . $sobrenome;

        echo "<p>Nome completo: $nomeCompleto</p>";
    ?>
</div>

</body>
</html>