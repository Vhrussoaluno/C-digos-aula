<?php
$nome = "Gisbert";
$idade = 35;
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8"><title>Variáveis</title>
<style>
body{font-family:sans-serif;background:#f4f4f9;padding:40px;}
.card{background:white;padding:20px;border-radius:12px;box-shadow:0 0 12px #0001;}
</style>
</head>
<body>
<div class="card">
<?php echo "Olá, meu nome é $nome e eu tenho $idade anos."; ?>
</div>
</body>
</html>