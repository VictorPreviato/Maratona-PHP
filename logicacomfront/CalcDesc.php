<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
    <link rel="stylesheet" href="./CSS/Calc.css">
</head>
<body>

<div id="navega">
    <button onclick="document.location='./CalcDesc.php'" class="bnav">Desconto</button>
    <button onclick="document.location='./ImparOuPar.php'" class="bnav">Ímpar ou Par</button>
    <button onclick="document.location='./Notas.php'" class="bnav">Notas de Alunos</button>
</div>

<div id="enun">
<h1>Calculadora de Desconto</h1>
<br>
<p>Objetivo: Cálculos matemáticos e uso de variáveis.
Descrição: Crie um script que calcule o valor do desconto de um 
produto, dado o preço original e a porcentagem de desconto. Exemplo 
de fórmula: <br><br>
<b>F = (C x 2/5) + 32</b> <br><br>
Dica: Use variáveis para armazenar o preço e a porcentagem do 
desconto e calcule o valor final.</p>
</div>


<div class="posiform">
<form action="./CalcDesc.php" method="POST">
    <div class="entradas">
    <label for="preco">Valor do produto em R$:</label>
    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="00,00" name="valor">
    </div>

    <div class="entradas">
        <label for="desconto">Insira o desconto %</label>
        <input type="number" name="desconto" >
    </div>

    <div>
    <input type="submit">
    </div>

</form>
</div>

<div id="rphp">
<?php 


if(isset($_POST["valor"]) && isset($_POST["desconto"])){
    $VT = $_POST["valor"] - ($_POST["valor"] * ($_POST["desconto"] / 100));
    }
    if(isset($_POST["valor"]) && isset($_POST["desconto"])){
    $VCON = number_format($VT,2,',','.');
    }
    
    if(isset($_POST["valor"]) && isset($_POST["desconto"])){
        echo "O valor do seu produto após desconto é R$" . $VCON . "!";
    }
    
?>

</div>

</body>
</html>