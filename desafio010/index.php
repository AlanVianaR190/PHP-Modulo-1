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
        // função para configurar dia/mes/ano
        date_default_timezone_set("America/Sao_Paulo");
        $data_atual = date("Y");
        // 
        $ano_nasc = $_REQUEST["ano1"] ?? 2000;
        $ano_esc = $_REQUEST["ano2"] ?? $data_atual;
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nascimento">Em que ano voce nasceu: </label>
            <input type="number" name="ano1" id="ano1" min="1900" max="<?=$data_atual - 1?>" value="<?=$ano_nasc?>">
            <label for="idade">Quer saber sua idade em que ano? (estamos em <strong><?=$data_atual?></strong>)</label>
            <input type="number" name="ano2" id="ano2" min="<?=$data_atual?>" value="<?=$ano_esc?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>
    <?php 
        $idade_atual = $data_atual - $ano_nasc;
        $idade_futura = $idade_atual + ($ano_esc - $data_atual);
    ?>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano_nasc?> vai ter <strong><?=$idade_futura?></strong> em <?=$ano_esc?>!</p>
    </section>
</body>
</html>