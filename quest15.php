<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15</title>
</head>
<body>
    <h3> Questão 15: Faça um algoritmo que receba um número e diga se este número está no intervalo entre 100 e 200. </h3>

    <form method="post">
        <h1> Digite o número: </h1>
        <input type="number" step="any" name="numero" placeholder="digite o número:  " required> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    $n = $_POST["numero"] ;
    if ($n < 200 && $n > 100) {
        echo "<h1>" . $n . " está entre 200 e 100 </h1>" ;
    } else {
        echo "<h1> Digite outro número! </h1>" ;
    }
}

?>