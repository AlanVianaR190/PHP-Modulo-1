<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio em PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main > h1{
            color: #372991;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Numero:</label>
            <input type="number" name="num" id="num" min="0" value="<?=$num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <?php 
            //
            $raiz_qua = number_format(sqrt($num), 2, ",");
            $raiz_cub = number_format($num ** (1/3), 2, ",");
        ?>
        <h2>Resultado Final</h2>
        <p>Analisando o numero <strong><?=$num?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raiz_qua?></strong>.</li>
            <li>A sua raiz cubica é <strong><?=$raiz_cub?></strong>.</li>
        </ul>
    </section>
</body>
</html>