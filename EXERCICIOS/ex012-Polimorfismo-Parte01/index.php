<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte01</title>
</head>
<body>
    <pre>
        <?php 
            require_once "php/Animais.php";

            use ex012\Polimorfismo\Canguru;
            use ex012\Polimorfismo\Cachorro;
            use ex012\Polimorfismo\Cobra;
            use ex012\Polimorfismo\Tartaruga;
            use ex012\Polimorfismo\GoldFish;
            use ex012\Polimorfismo\Arara;

            $c = new Canguru();
            $k = new Cachorro();
            $co = new Cobra();
            $t = new Tartaruga();
            $g = new GoldFish();
            $a = new Arara();

            echo "CANGURU\n";
            $c->locomover();
            $c->alimentar();
            $c->usarBolsa();

            echo "\n\nCACHORRO\n";
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            $k->abanarRabo();

            echo "\n\nCOBRA\n";
            $co->locomover();
            $co->alimentar();
            $co->emitirSom();

            echo "\n\nTARTARUGA\n";
            $t->locomover();
            $t->alimentar();

            echo "\n\nGOLDFISH\n";
            $g->locomover();
            $g->soltarBolha();

            echo "\n\nARARA\n";
            $a->locomover();
            $a->emitirSom();
            $a->fazerNinho();
        ?>
    </pre>
</body>
</html>