<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>

<?php 

 $a = 10;
 $b = "10";

 echo "<br> <h3> Comparação de igualdade </h3>";
 echo($a == $b) ? "São iguais." : "Não são iguais.";
 echo "<br><br>";
 echo ($a === $b) ? "São estritamente iguais." : "Não são estritamente iguais.";

 echo "<br><h3> Comparção de diferença </h3>";
 echo($a != $b) ? "São diferentes." : "São iguais.";
 echo "<br><br>";
 echo ($a !== $b) ? "São estritamente diferentes." : "São estritamente iguais.";

 $teste = false;
 echo "<br><h3> Negação </h3>";
 echo(!$teste) ? "É verdadeiro." : "É falso.";

 $c = 5;
 $d = 3;

 echo "<br><h3> Maior que e Menor que </h3>";
 echo($c > $d) ? "C é maior que D." : "C não é maior que D.";
 echo "<br><br>";
 echo ($c < $d) ? "C é menor que D." : "C não é menor que D.";

 $e = 5;
 $f = 5;
 $g = 3;
 
 echo "<br><h3> Maior ou igual a, menor ou igual a </h3>";
 echo($e >= $f) ? "E é maior ou igual a F." : "E não é maior ou igual a F.";
 echo "<br><br>";
 echo ($e <= $g) ? "E é menor ou igual a G." : "E não é menor ou igual a G.";


?>



</body>
</html>