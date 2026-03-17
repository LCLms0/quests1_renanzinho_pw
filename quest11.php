<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>
    <h3> Questão 11: Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. <br>
        Sabe-se que o preço de custo receberá um acréscimo de acordo com um percentual informado pelo usuário. </h3>

    <form method="post">
        <h2>Digite o Preço do Produto:  </h2>
        <input type="number" step="any" name="valor" placeholder="Digite o Valor: " required> </input>
        <br> <br> 
        <h2>Digite o Total de acréscimo em Porcentagem:  </h2>
        <input type="number" step="any" name="acrescimo" placeholder="Digite o Acréscimo: " required> </input>
        <span> % </span>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $valor = $_POST["valor"] ;
    $acrescismo = $_POST["acrescimo"] ;
    $porcen = $acrescismo / 100 ;
    $valor_adicionar = $porcen * $valor ;
    $valor_total = $valor_adicionar + $valor ;

    echo "<h1> Valor digitado : " . $valor . " Reais, Acréscimo:  " . $acrescismo  ." % , Valor a Pagar:  " . $valor_total . " Reais </h1>" ;
}

?>