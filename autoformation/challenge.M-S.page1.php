<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['username'] = $_POST['username'];

    header("Location: page2.php");
    exit();
}
?>

<form method="POST">

Username:
<input type="text" name="username">

<button type="submit">Next</button>

</form>


