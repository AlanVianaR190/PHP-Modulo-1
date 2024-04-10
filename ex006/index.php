<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // capturando os dados de um formulario retro alimentado
        $val1 = $_GET["n1"] ?? 0;
        $val2 = $_GET["n2"] ?? 0;

    ?>
    <main>
        <h1>Somador de valores</h1>

        <!-- isso faz com que o formulário seja submetido para a própria página PHP em que o formulário está, ou seja o mesmo script PHP que está sendo exibido no navegador. -->
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            
            <label for="num1">Valor 1:</label>
            <input type="number" name="n1" id="n1" value="<?=$val1?>"><!-- campo de entrada para o valor 1 -->
            <label for="num2">Valor 2:</label>
            <input type="number" name="n2" id="n2" value="<?=$val2?>"><!-- campo de entrada para o valor 2 -->
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="result">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $val1 + $val2;
            echo "<ul><li>A soma entre os valores $val1 e $val2 é igual a <strong>$soma</strong>.</li></ul>"
        ?>
    </section>
</body>
</html>