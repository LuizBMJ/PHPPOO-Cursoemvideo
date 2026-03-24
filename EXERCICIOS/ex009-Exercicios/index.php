<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
<pre>
<?php 

require_once "php/PessoasDo.php";

use ex009\Exercicios\Livro;
use ex009\Exercicios\Pessoa;

// Criando pessoas
$p1 = new Pessoa("João", 25, "M");
$p2 = new Pessoa("Maria", 30, "F");

// Criando livros
$l1 = new Livro("Aprendendo PHP", "José da Silva", 300, $p1);
$l2 = new Livro("POO na Prática", "Ana Souza", 250, $p2);

// Testando métodos

$l1->abrir();
$l1->folhear(100);
$l1->avancarPag();

$l2->abrir();
$l2->folhear(50);
$l2->voltarPag();

// Exibindo detalhes
echo "=== LIVRO 1 ===\n";
$l1->detalhes();

echo "\n=== LIVRO 2 ===\n";
$l2->detalhes();

?>
</pre>
</body>
</html>