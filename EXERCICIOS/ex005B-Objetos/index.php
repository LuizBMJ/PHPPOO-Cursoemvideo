<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
    <link rel="stylesheet" href="php/ContaBanco.php">
</head>
<body>
    <pre>
        <?php 
            require_once "php/ContaBanco.php";

            use ex005\Objetos\ContaBanco;

            $conta1 = new ContaBanco();

            $conta1->setNumConta(1111);
            $conta1->setDono("Jorge");
            $conta1->abrirConta("CC");

            echo " <p> Conta: " . $conta1->getNumConta() . "\n";
            echo "Dono: " . $conta1->getDono() . "\n";
            echo "Saldo inicial: " . $conta1->getSaldo() . "\n";

            $conta1->depositar(100);

            echo "Saldo após depósito: " . $conta1->getSaldo() . "\n";

            $conta1->sacar(30);

            echo "Saldo após saque: " . $conta1->getSaldo() . "\n";

            $conta1->pagarMensal();

            echo "Saldo após mensalidade: " . $conta1->getSaldo() . "</p> \n";

            $conta2 = new ContaBanco();

            $conta2->setNumConta(2222);
            $conta2->setDono("Marya");
            $conta2->abrirConta("CP");

            echo " <p> Conta: " . $conta2->getNumConta() . "\n";
            echo "Dono: " . $conta2->getDono() . "\n";
            echo "Saldo inicial: " . $conta2->getSaldo() . "\n";

            $conta2->depositar(400);

            echo "Saldo após depósito: " . $conta2->getSaldo() . "\n";

            $conta2->sacar(150);

            echo "Saldo após saque: " . $conta2->getSaldo() . "\n";

            $conta2->pagarMensal();

            echo "Saldo após mensalidade: " . $conta2->getSaldo() . "</p> \n";

            echo "<br>";

            var_dump($conta1);
            var_dump($conta2);
        ?>
    </pre>
</body>
</html>