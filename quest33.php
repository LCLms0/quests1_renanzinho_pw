<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 33</title>
</head>
<body>
    <h3>Questão 33: Escrever um algoritmo que leia três valores inteiros e verifique se eles podem ser os lados de um triângulo. 
        Se forem, informar qual o tipo de triângulo que eles formam: equilátero, isóscele ou escaleno.
        Propriedade: o comprimento de cada lado de um triângulo é menor do que a soma dos comprimentos dos outros
        dois lados.
        Triângulo Equilátero: aquele que tem os comprimentos dos três lados iguais;
        Triângulo Isóscele: aquele que tem os comprimentos de dois lados iguais. Portanto, todo triângulo equilátero é
        também isóscele;
        Triângulo Escaleno: aquele que tem os comprimentos de seus três lados diferentes. </h3>


    <form method="post">
        <h1>Digite o 1 lado: </h1>
        <input type="number" name="l1" step="any" placeholder="Primeiro lado: ">
        <h1>Digite o 2 lado: </h1>
        <input type="number" name="l2" step="any" placeholder="Segundo lado: ">
        <h1>Digite o 3 lado: </h1>
        <input type="number" name="l3" step="any" placeholder="Terceiro lado: ">
        <button type="submit" name="enviar">enviar</button>
    </form>
    
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    
    $l1 = $_POST["l1"] ;
    $l2 = $_POST["l2"] ;
    $l3 = $_POST["l3"] ;

    $soma_lados = $l1 + $l2 + $l3;

    if ($l1 < $soma_lados && $l2 < $soma_lados && $l3 < $soma_lados) {
        if ($l1 == $l2 && $l2 == $l3 && $l3 == $l1) {
            echo "<h1>È um Triângulo Equilátero </h1>";
        } elseif ($l1 != $l2 && $l2 != $l3 && $l3 != $l1 ) {
            echo "<h1>È um Triângulo Escaleno </h1>";
        } else {
            echo "<h1>È um Triângulo Isóscele </h1>";
        }
    } else {
        echo "<h1> Não é um Triângulo </h1>";
    }

}

?>