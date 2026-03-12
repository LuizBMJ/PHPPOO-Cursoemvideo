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

            $c1 = new ex004\SetterGetter\Caneta();

            $c1->setModelo("BIC");
            //$c1->modelo = "NIC";

            $c1->setPonta(0.5);
            //$c1->ponta = 0.6;

            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"

        ?>
    </pre>
    
</body>
</html>