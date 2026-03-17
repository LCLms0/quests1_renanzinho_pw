<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 18</title>
</head>
<body>
    <h3> Questão 18: Faça um algoritmo que receba a idade de 75 pessoas <br>
        e mostre mensagem informando “maior de idade” e “menor de <br>
        idade” para cada pessoa. Considere a idade a partir de 18 anos como maior de idade. </h3>
    <form method="post">
    <?php
        for ($i=1; $i <= 75 ; $i++) {  ?>
        <input type="number" name="n[]" placeholder="Digite a idade:  ">
    <?php } ?>
    <button type="submit" name="enviar" > Enviar </button>
    </form> 
</body>
</html>

<?php 

if (isset($_POST["enviar"]) && isset($_POST["n"])) {
    $valores = $_POST["n"] ;
    foreach ($valores as $s){
        if ($s >= 18) {
            echo "<h1>" . $s . " Anos, È Maior de idade </h1>" ;
        } else {
            echo "<h1>" . $s . " Anos, È Menor de idade </h1>" ;
        }
    }

}

?>