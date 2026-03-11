<?php

session_start();


if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}


if(isset($_POST['item'])){

    $item = $_POST['item'];



    if(!in_array($item, $_SESSION['cart'])){
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

<h2>Cart: <?php echo count($_SESSION['cart']); ?> items</h2>

<form method="POST">

<p>
Item 1
<button type="submit" name="item" value="Item 1">Add to Cart</button>
</p>

<p>
Item 2
<button type="submit" name="item" value="Item 2">Add to Cart</button>
</p>

<p>
Item 3
<button type="submit" name="item" value="Item 3">Add to Cart</button>
</p>

</form>

<h3>Items in Cart:</h3>

<ul>

<?php
foreach($_SESSION['cart'] as $cartItem){
    echo "<li>$cartItem</li>";
}
?>

</ul>

</body>
</html>