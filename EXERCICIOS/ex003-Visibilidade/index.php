<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex003</title>
</head>
<body>
    <pre>
        <?php
            require 'Caneta.php';
            $c1 = new ex003\Caneta();
            $c1->cor = "Azul";
            $c1->modelo = "BIC cristal";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            $c1->rabiscar();
            $c1->tampar();
            print_r($c1);
        ?>
    </pre>
    
</body>
</html>