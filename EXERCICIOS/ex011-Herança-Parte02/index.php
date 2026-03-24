<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança Parte02</title>
</head>
<body>
    <pre>
        <?php 
            require_once "php/Comunidade.php"; // arquivo onde estão as classes

            use ex011\Herança\Visitante;
            use ex011\Herança\Aluno;
            use ex011\Herança\Bolsista;

            // Criando objetos
            $v1 = new Visitante("Carlos", 28, "M");

            $a1 = new Aluno("Maria", 20, "F", "2023001", "Informática");

            $b1 = new Bolsista("João", 22, "M", "2023002", "Engenharia", 50);

            // Mostrando objetos
            print_r($v1);
            print_r($a1);
            print_r($b1);

            echo "<hr>";

            // Testando métodos
            $a1->pagarMensalidade();
            $b1->pagarMensalidade(); // sobrescrito
            $b1->renovarBolsa();

            echo "<hr>";

            // Testando aniversário
            $a1->fazerAniv();
            print_r($a1);
        ?>
    </pre>
</body>
</html>