
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Webshop</title>
</head>
<body>
<?php
include('template.php');

session_start(); // Starta sessionen om det inte redan är gjort

// Ta bort alla sessionvariabler

session_unset();

// Förstör sessionen

session_destroy();


header("Location: index.php"); // Omdirigera användaren tillbaka till startsidan

?>
</body>
</html>