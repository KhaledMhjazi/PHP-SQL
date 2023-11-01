<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>template</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>


<?php

session_name('Website');
session_start();
$host   ="localhost";
$user   ="khamhj21";
$pwd    ="123231.Khh";
$db     ="khamhj21_db";
$mysqli = new mysqli($host, $user, $pwd, $db);

$navigation = <<<END
<nav>
 <a href="index.php">Home</a>    <br>
 <a href="about.php">About</a>   <br>
 <a href="products.php">Products</a>   <br>
 <a href="add_product.php">Add product</a>    <br>

 
END;


if (isset($_SESSION['userId']))
{
    $navigation .= <<<END
    <a href="logout.php">Log out</a> <br>
    <a href="register.php">Register</a> <br>
    Logged in as {$_SESSION['username']}
END;
} else {
    $navigation .= <<<END
    <a href="login.php">Login</a>
END;
}
    $navigation .= '</nav>';
?>



</body>
</html>
