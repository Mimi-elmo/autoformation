<?php
session_start();

$username = $_SESSION['username'];
$language = $_SESSION['language'];
?>

<h2>
Hello <?php echo $username; ?>, you love <?php echo $language; ?>!
</h2>