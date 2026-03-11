<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['item'])) {
    $item = $_POST['item'];

    if (!in_array($item, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $item;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
</head>
<body>

<p>Cart: <?php echo count($_SESSION['cart']); ?> items</p>

<form method="post">

<div>
<span>Item 1</span>
<button type="submit" name="item" value="Item 1">Add to Cart</button>
</div>

<div>
<span>Item 2</span>
<button type="submit" name="item" value="Item 2">Add to Cart</button>
</div>

<div>
<span>Item 3</span>
<button type="submit" name="item" value="Item 3">Add to Cart</button>
</div>

</form>

<h3>Items in Cart:</h3>

<ul>
<?php foreach ($_SESSION['cart'] as $cartItem) { ?>
<li><?php echo htmlspecialchars($cartItem); ?></li>
<?php } ?>
</ul>

</body>
</html>







