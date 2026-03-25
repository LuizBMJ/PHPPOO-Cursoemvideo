<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte02</title>
</head>
<body>
    <pre>
        <?php 
            require_once "php/Animais.php";

            use ex013\Polimorfismo\Cachorro;

            $c = new Cachorro();

            $c->reagir("olá");
            $c->reagir("vai apanhar");

            $c->reagir(11, 45);
            $c->reagir(19, 00);

            $c->reagir(true);
            $c->reagir(false);

            $c->reagir(2, 12.5);
            $c->reagir(17, 4.5);
        ?>
    </pre>
</body>
</html>