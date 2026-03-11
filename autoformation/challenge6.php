<?php

$name = "";
$email = "";
$message = "";
$error = "";
$success = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(strpos($email,"@") === false){
        $error = "Invalid Email!";
    }else{
        $success = "Message sent successfully!";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>
<
<?php if($error){ ?>

<p style="color:red;"><?php echo $error; ?></p>

<?php } ?>

<?php if($success){ ?>

<p style="color:green; "><?php echo $success; ?></p>

<?php } ?>

<form method="POST">

Name:<br>
<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

Email:<br>
<input type="text" name="email" value="<?php echo $email; ?>"><br><br>

Message:<br>
<textarea name="message"><?php echo $message; ?></textarea><br><br>

<button type="submit">Send</button>

</form>

</body>
</html>
