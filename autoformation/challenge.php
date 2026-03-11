<?php
// Hardcoded product list
$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "Phone", "category" => "tech"],
    ["name" => "Tablet", "category" => "tech"],
    ["name" => "Shoes", "category" => "fashion"],
    ["name" => "Watch", "category" => "fashion"]
];

// Get category and sort parameters from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;
$sort = isset($_GET['sort']) ? $_GET['sort'] : null;

// Filter by category if provided
if ($category) {
    $products = array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}

// Sort alphabetically if sort parameter is provided
if ($sort === 'asc') {
    usort($products, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
} elseif ($sort === 'desc') {
    usort($products, function($a, $b) {
        return strcmp($b['name'], $a['name']);
    });
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>
    <h1>Product Catalog</h1>

    <!-- Filter Links -->
    <p>Filter by Category:</p>
    <a href="?category=tech">Tech</a> |
    <a href="?category=fashion">Fashion</a> |
    <a href="?">All</a>

    <p>Sort:</p>
    <a href="?sort=asc">Ascending</a> |
    <a href="?sort=desc">Descending</a>

    <h2>Products:</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product['name']; ?> (<?php echo $product['category']; ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

