<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos Primitivos</h1>
    <?php 
        
        // 0x - hexadecimal; 0b - binario; 0 - octal, exponenciacão & exponenciacão com coersão
        // $num = 0x1a;
        // $num = 0b1011;
        // $num = 010;
        // $num = 3e2;
        // $num = (int) 5e3;

        // echo "O valor da variavel é $num";

        // $valor = 300;
        // $valor = 45.2;
        // $valor = true;
        // $valor = "Alan";

        //função para identificar tipo e valor
        //var_dump($valor)
        //var_dump($num);

        //coersão mudando o tipo primitivo da variavel
        // $n = (float) "128";
        // var_dump($n);

        //para uma variavel boleana o valor true = 1; o valor false = 0, null ou nada
        // $v = false;
        // var_dump($v);
        // echo "O valor desta variavel é $v";

        //vetor
        // $vetor = ["alan", 33, 1.83, false];
        // var_dump($vetor);

        //classe
        class Pessoa {

            private string $name;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>