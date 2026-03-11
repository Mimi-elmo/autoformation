<?php 
     

$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "shoes", "category" => "fashion"],
    ["name" => "bag", "category" => "fashion"],
    ["name" => "phone", "category" => "tech"],
    ["name" => "Chair", "category" => "furniture"],
    ["name" => "Desk", "category" => "furniture"]
];

$category = isset($_GET['category']) ? $_GET['category'] : null;
$sort = isset($_GET['sort']) ? $_GET['sort'] : null;

// Filter
if($category){
    $products = array_filter($products, function($product) use ($category){
        return $product['category'] == $category;
    });
}

// Sort
if($sort === "asc"){
    usort($products,function($a,$b){
        return strcmp($a['name'],$b['name']);
    });
}

elseif($sort === "desc"){
    usort($products,function($a,$b){
        return strcmp($b['name'],$a['name']);
    });
}

?>

<h2>Products</h2>

<ul>
<?php foreach($products as $product){ ?>
<li><?php echo $product['name']; ?> (<?php echo $product['category']; ?>)</li>
<?php } ?>
</ul>

<h3>Filter</h3>

<a href="?">All Products</a><br>
<a href="?category=tech">Tech</a><br>
<a href="?category=fashion">Fashion</a><br>
<a href="?category=furniture">Furniture</a>

<h3>Sort</h3>

<a href="?sort=asc">A-Z</a><br>
<a href="?sort=desc">Z-A</a>

