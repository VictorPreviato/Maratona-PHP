<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3x3</title>
</head>

<body>

<h3>Matriz 3x3</h3>

<?php 


/*
Crie uma matriz de 3x3 contendo números inteiros aleatórios entre 1 e 100. 
Escreva um script em PHP que percorra a matriz e calcule a soma de todos os 
elementos da matriz. Após isso, imprima a soma total.

*/

$matriz = [[1,2,3],[4,5,6],[7,8,9]];

$somada = array_sum($matriz);

echo $somada;








?>
    
</body>

</html>