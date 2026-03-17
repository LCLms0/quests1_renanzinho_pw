<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <h3>Questão 3: Escrever um algoritmo para determinar o consumo médio de um automóvel <br>
        sendo fornecida a distância total percorrida pelo automóvel e o total de combustível gasto. </h3>

        <form method="post">
            <input type="number" name="distancia" placeholder="Digite a distância total pecorrida: " required></input>
            <input type="number" name="combustivel" placeholder="Digite o total de combustível gasto: " required></input>
            <button type="submit" name="enviar" > Calcular </button>
        </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) {
    $d = $_POST["distancia"] ;
    $c = $_POST["combustivel"] ;
    $cm = $d / $c ;

    echo "<h1> Consumo médio: " .  $cm . "</h1>";
}



?>