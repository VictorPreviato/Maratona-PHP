<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que combine dois arrays</title>
</head>

<h3>Combinação de Arrays</h3>

<body>

    
</body>

<?php 

$numeros1 = [1,2,3,4,5];
$numeros2 = [6,7,8,9,10];

echo "Arrays separadas : ";
print_r($numeros1);
print_r($numeros2);

echo "<br><br>";

$juntas = array_merge($numeros1, $numeros2);
echo "Arrays combinadas : ";
print_r($juntas);

?>

</html>