<?php

$products = [
    ["name" => "iPhone", "price" => 1000, "category" => "Electronics"],
    ["name" => "Laptop", "price" => 2000, "category" => "Electronics"],
    ["name" => "T-Shirt", "price" => 50, "category" => "Clothes"],
];

foreach ($products as $product) {
    echo "product: " . $product["name"] . " | price: " . $product["price"] . " | category: " . $product["category"] ;
}

