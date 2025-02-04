<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um programa que conte quantos números pares existem em um array</title>

    <h3>Contagem de números pares em</h3>

</head>
<body>

<?php

echo "<h4>Números pares:</h4>";

$array = [1,2,3,4,5,6,7,8,9,10];

foreach($array as $elementos)
{
if( ($elementos % 2) == 0 )
{
    echo "<li>".$elementos."</li>";   
}

}

?>


</body>
</html>