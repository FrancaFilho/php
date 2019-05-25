<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variaveis</title>
</head>
<body>
    <?php
        $nome = "Milton França Filho";

        //var_dump($nome);
        //print_r($nome);

        echo $nome;

        echo "<br>";

        unset($nome);

        if(!isset($nome)){
            echo "Variável \"Nome\" não existe mais";
        }else{
            echo $nome;
        }
        
        // Tipos simples
        $a = "Elizne";                  //string
        $b = 'Mirelly e Gabrielly';     //string
        $c = 2019;                      //int
        $d = 750000.00;                 //float
        $e = true;                      //boolean
        /////////////////////////////////////////////////

        //Tipos compostos
        $carros = array("sw4", "landRover", "f250");
        echo "<br>";
        echo $carros[2];

        $nascimento = new DateTime();
        echo "<br>";
        //var_dump($nascimento);
        //////////////////////////////////////////////////

        //Tipos especiais
        $arquivo = fopen("index.php", "r");
        //var_dump($arquivo);
        $nulo = NULL;
        $vazio = "";

    ?>
</body>
</html>