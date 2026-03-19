<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 22</title>
</head>
<body>
    <h3> Questão 22: Faça um algoritmo que receba o preço de custo e o preço de venda de 40 produtos. 
        Mostre como resultado se houve lucro, prejuízo ou empate para cada produto. 
        Informe media de preço de custo e do preço de venda. </h3>
    <form method="post">
    <?php 
    for ($i=1; $i < 5 ; $i++) { ?>
        <?php echo "<h1>Digite o Custo do Produto:" . $i . "</h1>" ;?>
        <input type="number" step="any" name="custos[]" placeholder="Digite o custo do produto: ">
        <?php echo "<h1>Digite o preço do Produto:" . $i . "</h1>" ;?>
        <input type="number" step="any" name="precos[]" placeholder="Digite o preço de venda do produto: ">
        <br> <br>
    <?php } ?>
        <button type="submit" name="enviar" > ENVIAR </button>
    </form>
</body>
</html>


<?php 

if (isset($_POST["enviar"])) {
    $custos = $_POST["custos"] ;
    $precos = $_POST["precos"] ;
    
    $soma_custos = 0 ;
    $soma_precos = 0;


    foreach ($custos as $i => $custo) {     
        $soma_custos += $custo ;
        $soma_precos += $precos[$i] ;
        $preco = $precos[$i] ;

        if ($preco > $custo) {
            echo "<h1> Você Obteve Lucro Na Venda do Produto: " .  $i + 1 . "</h1>" ;

        } elseif ( $custo > $preco) {
            echo "<h1> Você Obteve Prejuizo Na Venda do Produto: " . $i +1 . "</h1>"  ;
        } else {
            echo "<h1> Você Obteve Nem Lucro nem Prejuizo na Venda do Produto </h1>" ;
        }
        }

        $quantidade = count($custos) ;
        $media_custo = $soma_custos / $quantidade;
        $media_preco = $soma_precos / $quantidade;

        echo "<h1> Média de Custo:  " . $media_custo . "</h1>" ;
        echo "<h1> Média de Preço:  " . $media_preco . "</h1>" ;

}
?>