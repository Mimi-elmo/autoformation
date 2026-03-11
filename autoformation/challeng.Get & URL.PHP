<?php

$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "Phone", "category" => "tech"],
    ["name" => "Tablet", "category" => "tech"],
    ["name" => "Chair", "category" => "furniture"],
    ["name" => "Desk", "category" => "furniture"]
];

if(isset($_GET['category'])){
    $category = $_GET['category'];

    $products = array_filter($products, function($product) use ($category){
        return $product['category'] == $category;
    });
}

if(isset($_GET['sort'])){

    if($_GET['sort'] == "asc"){
        usort($products, function($a,$b){
            return strcmp($a['name'],$b['name']);
        });
    }

    if($_GET['sort'] == "desc"){
        usort($products, function($a,$b){
            return strcmp($b['name'],$a['name']);
        });
    }

}

echo "<h3>Products:</h3>";

foreach($products as $product){
    echo $product['name'] . "<br>";
}

?>

<br>

<h3>Filters</h3>

<a href="?category=tech">Tech</a><br>
<a href="?category=furniture">Furniture</a><br>

<br>

<h3>Sort</h3>

<a href="?sort=asc">A-Z</a><br>
<a href="?sort=desc">Z-A</a> 