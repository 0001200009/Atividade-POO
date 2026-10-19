<?php
require_once 'Produto.php';

echo "==============================\n";
echo "PRODUTO\n";
echo "==============================\n";

// criação do objeto 1
$produto1 = new Produto("Teclado", 150.00, 4);
$produto1->ExibirDados();
$total1 = $produto1->CalcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($total1, 2, ',', '.') . "\n\n";

// criação do objeto 2
$produto2 = new Produto("Mouse", 80.00, 10);
$produto2->ExibirDados();
$total2 = $produto2->CalcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($total2, 2, ',', '.') . "\n\n";

// criação do objeto 3 
$produto3 = new Produto("Monitor", 900.00, 3);
$produto3->ExibirDados();
$total3 = $produto3->CalcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($total3, 2, ',', '.') . "\n\n";

// teste DESAFIO 1: Adicionar estoque ao teclado
echo "--- Teste Adicionar Estoque ---\n";
$produto1->AdicionarEstoque(3);
$produto1->ExibirDados();
echo "\n";

// teste DESAFIO 2: Remover estoque do mouse
echo "--- Teste Remover Estoque ---\n";
$produto2->RemoverEstoque(5);
$produto2->ExibirDados();