<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de Php</h1>
    <?php
        //função para configurar a hora a partir da região
        date_default_timezone_set("America/Sao_Paulo");

        //o ponto(.) e equivalente a +(mais) usado para concatenação
        echo "Hoje é dia " . date("d/m/Y");
        echo " E a hora atual é " . date("G:m:s"); 
    ?>
</body>
</html>