<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
    <h3> Questão 12:  O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor <br>
        e dos impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o resultado). <br>
        Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
        leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo. </h3>

    <form method="post">
        <h2>Digite o Preço do Produto:  </h2>
        <input type="number" step="any" name="valor" placeholder="Digite o Valor do carro: " required> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    
    $valor = $_POST["valor"] ;
    $acre_distri = 0.28 ;
    $acre_impost = 0.45 ;
    $valor = $valor + ($valor * $acre_impost) ;
    $valor = $valor + ($valor * $acre_distri) ;
    echo "<h1> Custo Do carro:  " . $_POST["valor"] . " Reais , Valor com acréscimo:  " . $valor  . " Reais" ;

}

?>