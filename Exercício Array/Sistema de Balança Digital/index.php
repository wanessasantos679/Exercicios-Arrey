<?php
// Array com frutas e preço por KG
$frutas = [
    "banana" => 5.50,
    "maca"   => 8.00,
    "uva"    => 12.00,
    "abacaxi"=> 6.50
];

// Quilos comprados e fruta escolhida
$frutaEscolhida = "uva";
$quilos = 3;

// Verifica se a fruta existe no array
if(array_key_exists($frutaEscolhida, $frutas)) {
    $valorCompra = $quilos * $frutas[$frutaEscolhida];

    // Verifica desconto
    if($valorCompra > 30) {
        $desconto = $valorCompra * 0.12;
        $valorFinal = $valorCompra - $desconto;
        echo "Total sem desconto: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
        echo "Desconto de 12%: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Total a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
    } else {
        echo "Total a pagar: R$ " . number_format($valorCompra, 2, ',', '.');
    }
} else {
    echo "Fruta não encontrada!";
}
?>
