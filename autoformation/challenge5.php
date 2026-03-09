<?php

function manualReverse($text){

    $reversed = "";

    for($i = strlen($text)-1; $i >= 0; $i--){
        $reversed .= $text[$i];
    }

    return $reversed;
}

echo manualReverse("mohammad amine");

?>