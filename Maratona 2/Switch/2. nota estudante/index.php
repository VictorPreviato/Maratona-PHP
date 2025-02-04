<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que exiba a categoria de um estudante de acordo com sua 
    nota</title>

<h3>Categoria Estudante</h3>

</head>

<?php 

$nota = 6;

switch($nota) {

case $nota >= 0 && $nota <= 4.9:
    echo "Reprovado!";
    break;

    case $nota >= 5 && $nota <= 6.9:
        echo "Recuperação!";
        break;

        case $nota >= 7 && $nota <= 10:
            echo "Aprovado!";
            break;
    
    default : echo "Nota inválida";
    break;
}

?>

<body>
    
</body>
</html>