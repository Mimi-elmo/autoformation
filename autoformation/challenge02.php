<?php

function calculateArea($width, $height) {

    $area = $width * $height;
    return $area;

}

$totalArea = calculateArea(5, 4);

echo "The total area is " . $totalArea . " square units.";

?>