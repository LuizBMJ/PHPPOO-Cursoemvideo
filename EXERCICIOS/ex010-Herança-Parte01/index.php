<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança Parte 01</title>
</head>
<body>
    <pre>
        <?php 
        
        require_once "php/Comunidade.php"; // ajuste o nome do arquivo se for diferente

        use ex010\Herança\Aluno;
        use ex010\Herança\Professor;
        use ex010\Herança\Funcionario;

        // Criando objetos
        $a1 = new Aluno("João", 20, "M", 1234, "Informática");
        $p1 = new Professor("Maria", 45, "F", "Matemática", 5000);
        $f1 = new Funcionario("Carlos", 35, "M", "Limpeza", true);

        // Usando métodos
        $a1->fazerAniver();

        $p1->receberAum(500);

        $f1->mudarTrabalho();

        // Mostrando os objetos
        print_r($a1);
        print_r($p1);
        print_r($f1);

        ?>
    </pre>
</body>
</html>