<?php
// criação da classe Produto
class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    // método construtor
    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // método para exibir os dados do produto
    public function ExibirDados(): void {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
    }

    // método para calcular o valor total do estoque
    public function CalcularValorEstoque(): float {
        return $this->preco * $this->quantidade;
    }

    // DESAFIO 1: método para adicionar quantidade ao estoque
    public function AdicionarEstoque(int $quantidade): void {
        $this->quantidade += $quantidade;
    }

    // DESAFIO 2: método para remover quantidade do estoque
    public function RemoverEstoque(int $quantidade): void {
        if ($quantidade <= $this->quantidade) {
            $this->quantidade -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque.\n";
        }
    }
}