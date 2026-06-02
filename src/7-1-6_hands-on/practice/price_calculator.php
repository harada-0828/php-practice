<?php

$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

echo "商品名:" . $product_name . "<br>";
echo "単価:" . number_format($price) . "円<br>";
echo "数量:" . $quantity . "個<br>";
echo "小計:" . number_format($subtotal) . "円<br>";
echo "消費税（10%):" . number_format($tax_amount) . "円<br>";
echo "合計:" . number_format($total) . "円<br>";

?>