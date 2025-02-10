<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Pedidos de Compra</title>
</head>


<body>
    
<?php 

/*Crie um sistema que simule o processamento de pedidos de compra em 
uma loja online. O programa deve processar um número determinado de pedidos 
e, para cada um, imprimir "Processando pedido X". O sistema deve continuar até 
que todos os pedidos sejam processados, sendo o número de pedidos fornecido 
pelo usuário.*/


$pedidos = range(1,10,1);


do {
    $pedidos[1]++;
    echo "Processando pedido: <br> " . print_r($pedidos[1]);

} while ($pedidos[1] < 10);




?>

</body>


</html>