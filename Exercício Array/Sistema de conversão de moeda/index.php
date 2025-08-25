<?php
// Array associativo com as moedas e seus valores em relação ao real
$moedas = [
    "dolar" => 5.45,
    "euro" => 6.32,
    "libra" => 7.40,
    "iene"  => 0.039
];

// Valor em reais informado pelo usuário
$valorReais = 100; // exemplo: R$ 100

// Moeda escolhida
$moedaEscolhida = "euro";

// Verifica se a moeda existe no array
if(array_key_exists($moedaEscolhida, $moedas)) {
    $valorConvertido = $valorReais / $moedas[$moedaEscolhida];
    echo "R$ $valorReais em {$moedaEscolhida} é: " . number_format($valorConvertido, 2, ',', '.') . " {$moedaEscolhida}";
} else {
    echo "Moeda não encontrada!";
}
?>
