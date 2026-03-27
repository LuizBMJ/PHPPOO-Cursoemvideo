<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Final 01</title>
</head>
<body>
    <pre>
        <?php 
        
        require_once "php/ExFinal.php"; // ajuste se o arquivo tiver outro nome

        use Ex014\ExFinal\Video;
        use Ex014\ExFinal\Gafanhoto;

        // Criando vídeos
        $v = [];
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 2 de PHP");
        $v[2] = new Video("Aula 3 de Orientação a Objetos");

        // Criando gafanhotos (usuarios)
        $g = [];
        $g[0] = new Gafanhoto("Jorge", 17, "M", "jorge123");
        $g[1] = new Gafanhoto("Marya", 18, "F", "marya25");

        // Simulando ações
        $v[0]->play();
        $v[0]->like();
        $v[0]->setViews($v[0]->getViews() + 1);

        $g[0]->viuMaisUm();

        // Mostrando resultados
        echo "VIDEOS:\n";
        print_r($v);

        echo "\nGAFANHOTOS:\n";
        print_r($g);

        ?>
    </pre>
</body>
</html>