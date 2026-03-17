<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 19</title>
</head>
<body>
    <h3>Questão 19: Escrever um algoritmo que leia o nome e o sexo de 56 pessoas e informe o nome e se ela é homem ou mulher. 
        No final informe total de homens e de mulheres. </h3>

    <form method="post">
    <?php 
        for ($i=1; $i <= 56 ; $i++) { ?>
            <h1>Digite o Nome: </h1>
            <input type="text" name="nome[]" placeholder="Digite o Nome:  " required>
            <h1>Defina o sexo: </h1>
            <select name="sexo[]" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            <?php } ?>
    <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $sexos = $_POST["sexo"] ;
    $nomes = $_POST["nome"] ;
    $homens = 0;
    $mulheres = 0;

    foreach ($nomes as $i => $nome) {
        $sexo = $sexos[$i] ;

        if ($sexo == "M") {
            echo "<h1>O nome:  " . $nome . " é Masculino </h1>" ;
            $homens ++;
        } else {
            echo "<h1>O nome:  " . $nome . " é Feminino </h1>" ;
            $mulheres ++;
        }
    }

    echo "<h1> Ao todo tem:  ". $homens . " Homens </h1>" ;
    echo "<h1> Ao todo tem:  ". $mulheres . " Mulheres </h1>" ;
}
?>