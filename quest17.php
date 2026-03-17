<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
</head>
<body>
    <h3> Questão 17: Ler 80 números e ao final informar quantos número(s) est(á)ão no intervalo entre 10 (inclusive) e 150 (inclusive).</h3>
    <form method="post">
    <?php
    for ($i=1; $i <= 80 ; $i++) { ?> 
        <input type="number" step="any" name="n[]" placeholder="digite o número: " required> </input>
    <?php } ?>   
    <button type="submit" name="enviar" > Enviar </button> 
    </form>

    <?php 
    if (isset($_POST["enviar"]) && isset($_POST["n"])) {
        $contador = 0 ;
        $valores = $_POST["n"] ;
        foreach ($valores as $s) {
            if ($s >= 10 && $s <= 150) {
                $contador ++ ;
            }
        }
        echo "<h1> Apenas:  " . $contador . " Números estão entre 10 e 150 ou são iguais a eles </h1>" ;
    }
      
    ?>
</body>
</html>