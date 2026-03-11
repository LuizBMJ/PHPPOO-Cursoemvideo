<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex002</title>
</head>
<body>
    <?php 
        require 'Caneta.php';    
        $c1 = new Caneta;
        $c1->modelo = "Bic";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = false;

        $c1->tampar();
        $c1->rabiscar();

        $c1->destampar();
        $c1->rabiscar();

        var_dump($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2->modelo = "Bic";
        $c2->cor = "Vermelha";
        $c2->ponta = 0.5;
        $c2->carga = 85;
        $c2->tampada = true;

        var_dump($c2);


    ?>
    
</body>
</html>