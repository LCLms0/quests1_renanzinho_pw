<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>
    <h3> Questão 6: Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável  <br>
        A passe a possuir o valor da variável B e a variável B passe a possuir o valor da variável A. <br>
        Apresentar os valores trocados. </h3>

    <form method="post">
        <input type="text" name="valor1" placeholder="Digite o valor A: " required> </input>
        <br>
        <br> 
        <input type="text" name="valor2" placeholder="Digite o valor B: " required> </input>
        <br>
        <br>
        <button type="submit" name="enviar" > enviar </button>
    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) {
        $valor_a = $_POST["valor1"] ;
        $valor_b = $_POST["valor2"] ;

        $temp = $valor_a ; 
        $valor_a = $valor_b ;
        $valor_b = $temp ;

        echo "<h1> Valor A:  " . $valor_a . "</h1>";
        echo "<h1> Valor b:  " . $valor_b . "</h1>";

}

?>