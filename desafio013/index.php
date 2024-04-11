<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
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

        $valor = $_REQUEST["valor"] ?? 0;
    
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Qual valor vc deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponiveis: R$100,00; R$50,00; R$20,00; R$10,00 & R$5,00.</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        //
        $n100 = intdiv($valor, 100);
        $resto = $valor % 100;
        //
        $n50 = intdiv($resto, 50);
        $resto = $resto % 50;
        //
        $n20 = intdiv($resto, 20);
        $resto = $resto % 20;
        //
        $n10 = intdiv($resto, 10);
        $resto = $resto % 10;
        //
        $n05 = intdiv($resto, 5); 
    ?>
    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $valor, "BRL")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x<?=$n100?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x<?=$n50?></li>
            <li><img src="imagens/20-reais.jpg" alt="nota de 20" class="nota"> x<?=$n20?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x<?=$n10?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$n05?></li>
            <!-- <li><img src="imagens/2-reais.jpg" alt="nota de 2"> x0</li> -->
        </ul>
    </section>
</body>
</html>