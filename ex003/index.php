<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários e Variável dentro da variável</title>
</head>
<body>

<h2> Variável dentro de Variável </h2>

<?php
    
      //para comentário de uma linha eu uso o barra + barra
      /* eu uso
      para comentar
      várias linhas
      ap mesmo tempo
      */

      $nome = "Victor";
      $sobrenome = "Previato";

      //A Variável abaixo recebe uma interpolaçao
      $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";

      echo $frase;
?>


     
    
</body>
</html>