<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que classifique a nota de um estudante</title>

    <h3>Nota Estudante</h3>


</head>

<?php 

$nota = 0;

if ($nota >= 0 && $nota <= 4.9) {
    echo "Reprovado :(";
 } else if ($nota >=5 && $nota <= 6.9) {
    echo "Recuperação..."; 
} else if ($nota >= 7 && $nota <= 8.9) {
    echo "Aprovado."; 
} else if ($nota >= 9 && $nota <= 10) {
    echo "Aprovado com Distinção!"; 
} else {
    echo "Apenas notas de 0 a 10!";
}

?>


<body>
    
</body>
</html>