<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
    <link rel="stylesheet" href="php/php.php">
</head>
<body>
    <pre>
        <?php 
            require_once "php/php.php";

            use ex005\Objetos\ContaBanco;

            $conta1 = new ContaBanco();

            $conta1->setNumConta(1111);
            $conta1->setDono("Jorge");
            $conta1->abrirConta("CC");

            echo "Conta: " . $conta1->getNumConta() . "\n";
            echo "Dono: " . $conta1->getDono() . "\n";
            echo "Saldo inicial: " . $conta1->getSaldo() . "\n";

            $conta1->depositar(100);

            echo "Saldo após depósito: " . $conta1->getSaldo() . "\n";

            $conta1->sacar(30);

            echo "Saldo após saque: " . $conta1->getSaldo() . "\n";

            $conta1->pagarMensal();

            echo "Saldo após mensalidade: " . $conta1->getSaldo() . "\n";
        ?>
    </pre>
</body>
</html>