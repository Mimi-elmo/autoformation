<?php

$age = 80; 

if ($age < 15) {
    $price = 20;
} 
elseif ($age >= 12 && $age <= 18) {
    $price = 40;
} 
elseif ($age > 60) {
    $price = 30;
} 
else {
    $price = 60;
}

echo "<h2>Ticket System</h2>";
echo "Age: " . $age . "<br>";
echo "Ticket price: " . $price . " DH<br>";

if ($price == 20) {
    echo "<strong>Special: Children's Menu included!</strong>";
}
 





?> 




