<?php

function multiplyNumbers($a, $b) {

    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "Error: Invalid Input.";
    }

}

echo multiplyNumbers(5, 10);
echo "<br>";
echo multiplyNumbers(5, "apple");

?>