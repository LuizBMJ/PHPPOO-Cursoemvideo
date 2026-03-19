<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <pre>
        <?php 
        require_once "php/ControleRemoto.php";

        use ex006\Encapsulamento\ControleRemoto;

        $controle = new ControleRemoto();

        $controle->ligar();
        $controle->maisVolume();
        $controle->maisVolume();
        $controle->play();
        $controle->abrirMenu();
        ?>
    </pre>
</body>
</html>