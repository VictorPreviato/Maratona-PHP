<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que determine o dia da semana</title>

<h3>Dia da Semana</h3>

</head>

<?php 

$dia = 7;

switch ($dia) {
    case 1 : echo "Domingo";
    break;
    case 2 : echo "Segunda-Feira";
    break;
    case 3 : echo "Terça-Feira";
    break;
    case 4 : echo "Quarta-Feira";
    break;
    case 5 : echo "Quinta-Feira";
    break;
    case 6 : echo "Sexta-Feira";
    break;
    case 7 : echo "Sábado";
    break;
    default : echo "Valor inválido";
    break;
}

?>

<body>
    
</body>
</html>