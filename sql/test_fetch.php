<?php

require "db.php";

$minPrice = 100; // السعر الأدنى

$sql = "SELECT title FROM library_books WHERE price > :price";

$stmt = $pdo->prepare($sql);

$stmt->execute(['price' => $minPrice]);

$books = $stmt->fetchAll();

?>

<ul>

<?php foreach ($books as $book) { ?>

<li><?php echo $book['title']; ?></li>

<?php } ?>

</ul>