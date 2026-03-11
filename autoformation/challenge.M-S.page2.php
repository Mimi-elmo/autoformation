<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['language'] = $_POST['language'];
    header("Location: page3.php");
    exit();
}
?>

<form method="POST">

Favorite Programming Language:
<input type="text" name="language">

<button type="submit">Next</button>

</form>