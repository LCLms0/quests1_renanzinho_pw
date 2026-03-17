<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14</title>
</head>
<body>
    <h3> Questão 14: Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior. </h3>

    <form method="post">
        <h1>Digite o primeiro número: </h1>
        <input type="number" step="any" name="n1" placeholder="digite o primeiro número:  " required> </input>
        <h1>Digite o Segundo número: </h1>
        <input type="number" step="any" name="n2" placeholder="digite o segundo número:  " required> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    
    $n1 = $_POST["n1"] ;
    $n2 = $_POST["n2"] ;

    if ($n1 > $n2) {
        echo "<h1>" . $n1 . " È maior que " . $n2 . "</h1>" ;
    } if ($n2 > $n1) {
        echo "<h1>" . $n2 . " È maior que " . $n1 . "</h1>" ;
    }

}

?>