<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Compostos</title>
</head>
<body>
    <pre>
        <?php 
            require_once "php/Lutador.php";

            use ex007\ObjsCompostos\Lutador;

            $lut1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $lut2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lut3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lut4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

            // Testando saída
            echo "\n---------------------\n";
            $lut1->apresentar();
            echo "\n---------------------\n";
            $lut2->apresentar();
            echo "\n---------------------\n";
            $lut3->apresentar();
            echo "\n---------------------\n";
            $lut4->apresentar();
        ?>
    </pre>
</body>
</html>