<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
    <h3> Questão 10: A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) prestações sem juros. <br> 
        Faça um algoritmo que receba um valor de uma compra e mostre o valor das prestações. </h3>

    <form method="post">
        <h2> Valor do Produto : </h2>
        <br>
        <input type="number" step="any" name="valor" placeholder="Digite o Valor do Produto:"> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    
    $n = $_POST["valor"] ;
    $prestacao = $n / 5 ;
    for ($i=1; $i <= 5 ; $i++) { 
        echo "<h2> Prestação " . $i . " Custa:  " . $prestacao . " Reais" . "</h2>" ;
    }

}

?>