<?php

$products = [
    [
        "name" => "Ao thun",
        "price" => 100000,
        "quantity" => 2
    ],
    [
        "name" => "Quan jean",
        "price" => 250000,
        "quantity" => 1
    ],
    [
        "name" => "Giay",
        "price" => 500000,
        "quantity" => 1
    ]
];

$total = 0;

foreach ($products as $product) {
    echo "Ten san pham: " . $product["name"] . "<br>";
    echo "Gia: " . $product["price"] . "<br>";
    echo "So luong: " . $product["quantity"] . "<br>";
    
    $value = $product["price"] * $product["quantity"];
    echo "Thanh tien: " . $value . "<br><br>";

    $total += $value;
}

echo "Tong gia tri: " . $total;

?>