<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 31</title>
</head>
<body>
    <h3>Questão 31: Escrever um algoritmo que leia três valores inteiros distintos e os escreva em ordem crescente. </h3>
    <form method="post">
        <h1>Digite o Número 1:</h1>
        <input type="number" name="n1" placeholder="Digite o N1: " required>
        <h1>Digite o Número 2:</h1>
        <input type="number" name="n2" placeholder="Digite o N2: " required>
        <h1>Digite o Número 3:</h1>
        <input type="number" name="n3" placeholder="Digite o N3: " required>
        <button type="submit" name="enviar"> enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {  
    $numeros = [ 
        $_POST["n1"],
        $_POST["n2"],
        $_POST["n3"]
    ];

    sort($numeros);

    foreach ($numeros as $i => $n) {
        echo "<h1>" . $n . ",</h1>";
    }

}


?>