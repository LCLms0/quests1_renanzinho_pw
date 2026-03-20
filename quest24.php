<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 24</title>
</head>
<body>
    <h3>Questão 24: Faça um algoritmo que receba “N” números e mostre positivo, negativo ou zero para cada número. </h3>

    <form method="post">
        <h1>Digite a quantidade de números que você quer Digitar:  </h1>
        <input type="number" name="qtd" placeholder="Digite a quantidade: " required>
        <br> <br>
        <button type="submit" name="enviar" required > Enviar </button>
    </form>

    <form method="post">
    <?php 
        if (isset($_POST["enviar"])) {
        $qtd = isset($_POST["qtd"]) ? $_POST["qtd"] : 0 ;
        for ($i=1; $i <= $qtd; $i++) {  ?>
            <?php echo "<h1>Digite o número " . $i  . ": </h1>" ; ?>
            <input type="number" name="numeros[]" placeholder="Digite o Número: " required>
            <br> <br>
            <button type="submit" name="enviar_numeros" > Enviar </button>
    <?php  } }
    ?>
        </form>


</body>
</html>


<?php 

if (isset($_POST["enviar_numeros"])) {
    $numeros = $_POST["numeros"] ;

    foreach ($numeros as $i => $numero) {
        if ($numero > 0) {
            echo "<h1>" . $numero . " é Positivo" . "</h1>";
        } elseif ($numero == 0) {
            echo "<h1>" . $numero . " é igual a zero" . "</h1>";
        } else {
            echo "<h1>" . $numero . " é Negativo" . "</h1>";
        }
    }
}
 

?>