<?php

$i = 1;
$count = 0;

while ($i <= 50) {

    if ($i % 2 == 0) {
        $count++;
    }

    $i++;
}

echo "Total even numbers: " . $count;

?>