<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
    <h3> Questão 8: Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$)  <br>
        de um valor lido em dólar (US$). <br>
        O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com o usuário. </h3>

    <form method="post">
        <h2>Digite Quanto vale 1 dólar: </h2>
        <input type="number" step="any" name="cotacao" placeholder="Valor de 1 dolár: " required> </input>
        <h2>Digite Quantos dólares Você tem: </h2>
        <input type="number" step="any" name="qtd" placeholder="Total do valor: " required> </input>
        <button type="submit" name="enviar"> Calcular </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $cotacao = $_POST["cotacao"] ;
    $qtd = $_POST["qtd"] ;
    $real = $cotacao * $qtd ;

    echo "<h1>Você tem:  " . $qtd . " Doláres que valem:  " . $real . " Reais" . "</h1>" ;
}


?>