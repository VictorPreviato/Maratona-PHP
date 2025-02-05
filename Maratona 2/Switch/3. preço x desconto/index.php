<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faça um programa que calcule o preço final de um produto com base em um 
    código de desconto</title>

<h3>Desconto</h3>

</head>


<body>
    
<?php 


$código = 3;
$valorP = 1000; //valor simulado de um produto


$dez = $valorP - ($valorP * 0.1);
$vinte = $valorP - ($valorP * 0.2);
$trinta = $valorP - ($valorP * 0.3);


switch($código) {
case 1 : echo "Você recebeu um desconto de 10%, agora o valor do produto é: R$ " . number_format($dez,2,',','.');
break;
case 2 : echo "Você recebeu um desconto de 20%, agora o valor do produto é: R$ " . number_format($vinte,2,',','.');
break;
case 3 : echo "Você recebeu um desconto de 30%, agora o valor do produto é: R$ " . number_format($trinta,2,',','.');
break;
default : echo "Código inválido!";
break;

}


?>


</body>


</html>