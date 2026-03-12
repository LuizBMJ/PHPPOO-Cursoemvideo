<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex004</title>
</head>
<body>
    <pre>
        <?php
            require 'Caneta.php';

            $c1 = new ex004\Construct\Caneta("BIC", "Azul", 0.5);
            $c2 = new ex004\Construct\Caneta("KKK", "Verde", 0.9);

            print_r($c1);
            print_r($c2);

        ?>
    </pre>
    
</body>
</html>