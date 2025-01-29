<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos</title>
</head>
<body>

<h1>Operadores Aritiméticos</h1>

    <?php

    $soma = 20 + 20;
    $subtração = 10 - 5;
    $divisão = 5 / 2;
    $resto = 5 % 2;
    $multiplicacao = 5* 3;
    $potenciacao = 2 ** 3;

    echo "O resultador da soma é $soma <br>";
    echo "<br> O resultador da subtração é $subtração <br>";
    echo "<br> O resultador da divisão é $divisão <br>";
    echo "<br> O resto de 5/2 é $resto <br>";
    echo "<br> O resultador da multiplicação é $multiplicacao <br>";
    echo "<br> O resultador de 2 elevado a 3 é $potenciacao <br>";

    /*orderm de grandezas
    primeiro = () parênteses;
    segundo = potenciação;
    terceiro = multiplicação;
    quarto = divisão;
    quinto - soma;
    sexto = subtração;
    */

    // Primeira expressao: (3 + 2 ) * 4
    $valor1 = (3 + 2) * 4;
    

    // Exibindo os resultados - concatenação
    echo " <br> O resultado da primeira expressão: " . $valor1 . "<br> <br>";

    // Segunfa expressão: (2 * (2 + (2 - 1))) + 8 * 2

    $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;
   
    echo "O resultado da segunda expressão: " . $valor2 . "\n";

    ?>
</body>
</html>