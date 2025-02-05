<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que conte quantos números pares existem em um array</title>

    <h3>Contagem de números pares em array aleatória</h3>

</head>
<body>

<?php 


$array_aleatoria = range(0, 100);
shuffle($array_aleatoria );
$array_aleatoria = array_slice($array_aleatoria ,0,10);

print_r($array_aleatoria);

echo "<br> <br>";

foreach($array_aleatoria as $elementos)
{
if ( ($elementos % 2) == 0 ){
    echo "<li>".$elementos."</li>";
}

}

function contador_pares($array_aleatoria) {
    $contadores_pares = 0;

    foreach ($array_aleatoria as $numero) {
        if ($numero % 2 == 0) {
            $contadores_pares++;
        }
    }
    
    return $contadores_pares;
}

$quantidade_pares = contador_pares($array_aleatoria);

echo "<br>";

echo "O número de pares presente na array é: " . $quantidade_pares . ".";


?>

<?php 


?>

</body>
</html>