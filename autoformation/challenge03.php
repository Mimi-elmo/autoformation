<?php

function isAdult($age) {

    if ($age >= 18) {
        return true;
    } else {
        return false;
    }

}

$age = 30;

if (isAdult($age)) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}

?>