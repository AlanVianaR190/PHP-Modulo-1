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
        $nota1 = $_REQUEST["n1"] ?? 0;
        $peso1 = $_REQUEST["p1"] ?? 1;
        $nota2 = $_REQUEST["n2"] ?? 0;
        $peso2 = $_REQUEST["p2"] ?? 1;

    ?>
    <main>
        <h1>Medias Aritmeticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="">1º Valor</label>
            <input type="number" name="n1" id="n1" min="0" value="<?=$nota1?>">
            <label for="">1º Peso</label>
            <input type="number" name="p1" id="p1" min="0" value="<?=$peso1?>">
            <label for="">2º Valor</label>
            <input type="number" name="n2" id="n2" min="0" value="<?=$nota2?>">
            <label for="">2º Peso</label>
            <input type="number" name="p2" id="p2" min="0" value="<?=$peso2?>">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>
    <?php 
        $med_simp = ($nota1 + $nota2) / 2;
        $med_pond = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
    ?>
    <section>
        <h2>Calculo das Medias</h2>
        <p>Analisando os valores <?=$nota1?> e <?=$nota2?>:</p>
        <ul>
            <li>A <strong>media aritmetica simples</strong> entre os valores é igual a <?=number_format($med_simp, 1, ".")?></li>
            <li>A <strong>media aritmetica ponderada</strong> entre os valores é igual a <?=number_format($med_pond, 1, ".")?></li>
        </ul>
    </section>
</body>
</html>