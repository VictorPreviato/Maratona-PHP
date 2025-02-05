<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faça um programa que verifique se uma pessoa pode votar</title>

    <h3>Pode votar?</h3>


</head>

<?php 

$idade = 19;

if ($idade < 16) {
    echo "Você não pode votar!"; 
} else if ($idade >= 16 && $idade <= 17) {
    echo "Você pode votar, porém não é obrigado! ";
} else {
    echo "Você tem voto obrigatório!";
}

?>

<body>
    
</body>
</html>