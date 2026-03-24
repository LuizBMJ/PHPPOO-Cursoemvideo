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

            use ex008\Relacionamento\Lutador;
            use ex008\Relacionamento\Luta;

            $l1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

            $luta = new Luta();
            $luta->marcarLuta($l1, $l2);
            $luta->lutar();
        ?>
    </pre>
</body>
</html>