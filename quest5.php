<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <h3>Questão 5: Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. <br>
        No final informar o nome do aluno e a sua média (aritmética). </h3>

    <form method="post">
        <input type="text" name="nome" placeholder="Digite o nome do aluno:  " required> </input>
        <input type="number" name="nota1" placeholder="Digite a nota 1: " required> </input>
        <input type="number" name="nota2" placeholder="Digite a nota 2: " required> </input>
        <input type="number" name="nota3" placeholder="Digite a nota 3: " required> </input>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) {
    $nome = $_POST["nome"] ;
    $nota1 = $_POST["nota1"] ;
    $nota2 = $_POST["nota2"] ;
    $nota3 = $_POST["nota3"] ;
    $media = ($nota1 + $nota2 + $nota3) / 3 ;

    echo "<h1> Nome do aluno: " . $nome . "</h1>" ;
    echo "<h2> Média:  " . $media . "</h2>" ;

}

?>