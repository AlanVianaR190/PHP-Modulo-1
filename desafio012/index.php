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
        $tempo = $_REQUEST["seg"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="tempo">Qual o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        // 
        $semanas = intdiv($tempo, 604_800);
        $resto = $tempo % 604_800;
        //
        $dias = intdiv($resto, 86_400);
        $resto = $resto % 86_400;
        //
        $horas = intdiv($resto, 3_600);
        $resto = $resto % 3_600;
        //
        $minutos = intdiv($resto, 60);
        $segundos = $resto % 60;
    ?>
    <section>
        <h2>Totalizando Tudo</h2>
        <!--  -->
        <p>Analizando o valor que você digitou, <strong><?=number_format($tempo, 0, ",", ".")?> segundos</strong><br> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>