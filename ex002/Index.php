<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>

 <h2>
 <?php

      // Variavel do tipo string
     $sobrenome = "Victor";
     
     // Variável do tipo int
     $idade = 22;

     //Variável do tipo float
     $peso = 72.5;

     //Variável do tipo boolean (verdadeiro ou falso)
     $casado = false;

     echo "$sobrenome $idade $peso <br> <br>";

     //Método 1: Usando var_dump para exibir o valor booleano
     var_dump($casado); // Exibe 'bool(false)'

     echo "<br> <br>";

     //Método 2: Usando uma conversão booleana para string
     echo ($casado ? "Sou casado" : "Não sou casado"); //Exibe não sou casado
    
 ?>
 </h2>

</body>
</html>