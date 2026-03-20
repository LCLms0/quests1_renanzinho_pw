<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 35</title>
</head>
<body>
    <h3> Elabore um algoritmo que, dada a idade de um nadador. 
        Classifique-o em uma das seguintes categorias:
            Infantil A = 5 - 7 anos
            Infantil B = 8 - 10 anos
            juvenil A = 11- 13 anos
            juvenil B = 14 - 17 anos
            Sênior = 18 - 25 anos
            Apresentar mensagem “idade fora da faixa etária” quando for outro ano não contemplado. </h3>


    <form method="post">
            <h1> Digite a Idade:  </h1>
            <input type="number" name="idade" spaceholder="Digite A idade: " required>
            <button type="submit" name="enviar" > enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $idade = $_POST["idade"] ;

    if ($idade >= 5 && $idade <= 7) {
        echo "<h1> Infantil A </h1>";
    } elseif ($idade >= 8 && $idade <= 10) {
        echo "<h1> Infantil B </h1>";
    } elseif ($idade >= 11 && $idade <= 13) {
        echo "<h1> Juvenil A </h1>";
    } elseif ($idade >= 14 && $idade <= 17) {
        echo "<h1> Juvenil B </h1>";
    } elseif ($idade >= 18 && $idade <= 25) {
        echo "<h1> Sênior  </h1>";
    } else {
        echo "<h1> Idade fora da faixa etária </h1>";
    }

}

?>