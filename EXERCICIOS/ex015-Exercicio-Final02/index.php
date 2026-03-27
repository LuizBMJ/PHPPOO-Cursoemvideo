<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Final 02</title>
</head>
<body>
    <pre>
        <?php 
        
        require_once "php/ExFinal.php";

        use Ex015\ExFinal\Video;
        use Ex015\ExFinal\Gafanhoto;
        use Ex015\ExFinal\Visualizacao;

        // Criando vídeos
        $v = [];
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 2 de PHP");
        $v[2] = new Video("Aula 3 de Orientação a Objetos");

        // Criando gafanhotos
        $g = [];
        $g[0] = new Gafanhoto("Jorge", 17, "M", "jorge123");
        $g[1] = new Gafanhoto("Marya", 18, "F", "marya25");

        // Criando visualizações
        $vis = [];
        $vis[0] = new Visualizacao($g[0], $v[0]);
        $vis[1] = new Visualizacao($g[1], $v[1]);

        // Testando avaliações
        $vis[0]->avaliar(); // avaliação padrão
        $vis[1]->avaliar(85, "porcentagem"); // avaliação por porcentagem
        $vis[1]->avaliar(9, "nota"); // avaliação por nota

        echo "VIDEOS:\n";
        print_r($v);

        echo "\nGAFANHOTOS:\n";
        print_r($g);

        echo "\nVISUALIZACOES:\n";
        print_r($vis);

        ?>
    </pre>
</body>
</html>