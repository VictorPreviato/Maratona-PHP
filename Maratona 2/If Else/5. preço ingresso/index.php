<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que calcule o preço de um ingresso de cinema baseado no 
    horário</title>

<h3>Preço por Horário</h3>

</head>

<?php 

$hora = date("01:00");

if ($hora >= date("10:00") && $hora <= date("12:00")) {
    echo "Preço do ingresso: R$ 10,00"; 
} else if ($hora >= date("12:01") && $hora <= date("17:00")) {
    echo "Preço do ingresso: R$ 20,00"; 
} else if ($hora >= date("17:01") && $hora <= date("22:00")) {
    echo "Preço do ingresso: R$ 30,00";
} else if ($hora >= date("22:01") && $hora <= date("23:59")) {
    echo "Preço do ingresso: R$ 40,00";
}

else echo "Estabelecimento fechado!";



?>

<body>
    
</body>
</html>