<!Doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset "UTF-8">
        <title> Aula 03 PHP :D</title>
    </head>
    <body>
    <?php
    $preco=120;
    $quantidade=3;
    $desconto=30;
    $parcelas=2;
    $totalb= $preco * $quantidade;
    $totaldescontado = $totalb - 30;
    $totalparcelado = $totaldescontado / 2;
    $totaltaxado = $totaldescontado + 15;
    $totalresto = $totaldescontado % 2;

    echo "Valor Total da Compra é: " . $totalb . "<br>";
    echo "Valor da Compra com desconto é: " . $totaldescontado. "<br>";
    echo "Valor De cada parcela é: " .$totalparcelado . "<br>";
    echo "Valor da compra caso seja acrescentada uma taxa de R$15,00: " . $totaltaxado . "<br>";
    echo "Resto da divisão pelo valor final é: " . $totalresto . "<br>";

    ?>
    </body>
    </body>
</html>        
