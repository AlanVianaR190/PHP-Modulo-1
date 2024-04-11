<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
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
        // formatação de moedas com internacionalização
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // valor do salario minimo
        $v_sal_m = 1_412.00;
        // variavel de salario, caso o valor não seja digitado o valor automatico e de um salario minimo
        $sal = $_REQUEST["sal"] ?? $v_sal_m;
    ?>
    <main>
        <h1>Informe seu Salario</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salario: R$</label>
            <input type="number" name="sal" id="sal" min="0" step="0.01" value="<?=$sal?>" >
            <!-- usando a função de formatação de valores monetarios -->
            <ul><li>Considerando o salario minimo de <strong><?=numfmt_format_currency($padrao, $v_sal_m, "BRL")?></strong></li></ul>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            //
            $quant_sal = intdiv($sal, $v_sal_m);
            $difer_sal = $sal % $v_sal_m;
        ?>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salario de <strong><?=numfmt_format_currency($padrao, $sal, "BRL")?></strong></p>
        <ul><li>Ganha <strong><?=$quant_sal?> salarios minimos</strong> + <strong><?=numfmt_format_currency($padrao, $difer_sal, "BRL")?></strong></li></ul>
    </section>
</body>
</html>