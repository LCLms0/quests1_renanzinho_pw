<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16</title>
</head>
<body>
    <h3>Questão 16: Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o semestre. <br>
        Calcular a sua média (aritmética), informar o nome e sua menção aprovado (media >= 7), Reprovado (media <= 5) e Recuperação
        (media entre 5.1 a 6.9). </h3>

    <form method="post">
        <h1> Digite o nome do Aluno: </h1>
        <input type="text" name="nome" placeholder="Digite o nome do aluno:  " required>
        <h1> Digite a nota 1 do aluno: </h1>
        <input type="number" step="any" name="n1" placeholder="digite a nota 1:  " required> </input>
        <h1> Digite a nota 2 do aluno: </h1>
        <input type="number" step="any" name="n2" placeholder="digite a nota 2:  " required> </input>
        <h1> Digite a nota 3 do aluno: </h1>
        <input type="number" step="any" name="n3" placeholder="digite a nota 3:  " required> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {

    $nome = $_POST["nome"] ;
    $n1 = $_POST["n1"] ;
    $n2 = $_POST["n2"] ;
    $n3 = $_POST["n3"] ;

    $media = ($n1 + $n2 + $n3) / 3 ;

    if ($media >= 7) {
        echo "<h1> o aluno: " . $nome . ",foi aprovado com média:  " . $media   .  "</h1>";
    } elseif ($media <= 5) {
        echo "<h1> o aluno: " . $nome . ",foi Reprovado com média:  " . $media   .  "</h1>";
    } else {
        echo "<h1> o aluno: " . $nome . ",está de recuperação com média:  " . $media   .  "</h1>";
    }

}

?>