<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send</title>
</head>
<body>

<?php
include('template.php');
if (isset($_POST)) {

    $name = htmlspecialchars($_POST["name"]);
    $msg = htmlspecialchars($_POST["msg"]);

 $content = <<<END
<h3>Message was sent:</h3>
 Name: {$name}
 <br>
 Message: {$msg}
END;
$to = "khamhj21@student.hh.se"; //change this to your email address
$subject = "Test-mail";
$msg = $_POST["msg"];
$headers = "From: " . $_POST["name"];
mail($to, $subject, $msg, $headers);
}
echo $navigation;
echo $content;
?>


</body>
</html>
