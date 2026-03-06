<?php
$teaPrice = 15;      
$quantity = 5;       
$isStudent = true;   

$total = $teaPrice * $quantity;

if ($quantity > 5) {
    $total -= $quantity; 
}

if ($isStudent) {
    $total -= $total * 0,80;  
}

echo "<h2>Moroccan Cafe</h2>";
echo "<p>Thés : $quantity</p>";
echo "<p>Prix par thé : $teaPrice DH</p>";
echo "<p>Étudiant : " . ($isStudent ? "Oui" : "Non") . "</p>";
echo "<hr>";
echo "<h3>Total : $total DH</h3>";

?>
