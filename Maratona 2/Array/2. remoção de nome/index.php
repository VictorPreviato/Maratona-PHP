<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que remova o segundo elemento de um array</title>

<h3>Remoção de Dados na Array</h3>

</head>
<body>


<?php 

$nome = ["Alan", "Lucas", "Luis", "Victor", "Willian"];

print_r($nome);

echo "<br><br>";

unset($nome[0]);

echo "Primeiro elemento removido<br><br>";

print_r($nome);

?>
    
</body>
</html>