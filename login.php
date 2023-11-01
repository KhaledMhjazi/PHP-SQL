
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Webshop</title>
</head>
<body>

<?php

include('template.php');

 

if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $mysqli->real_escape_string($_POST['username']); // Säkra postdata
    $password = $mysqli->real_escape_string($_POST['password']);

 

    // Använd parametriska förfrågningar för att undvika SQL-injektion
    $query = "SELECT username, password, id FROM users WHERE username = ? AND password = ?";

    // Förbered förfrågan
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // Bind parametrar och exekvera förfrågan
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

 

        // Hämta resultat
        $stmt->bind_result($dbUsername, $dbPassword, $dbUserId);
        $stmt->fetch();

 

        if ($dbUsername === $username && $dbPassword === $password) {
            $_SESSION["username"] = $dbUsername;
            $_SESSION["userId"] = $dbUserId;
            $stmt->close();
            header("Location: index.php");
            exit();
        } else {
            echo "Wrong username or password. Try again";
        }

 

        $stmt->close();
    } else {
        echo "Database error: " . $mysqli->error;
    }
}

 

$content = <<<END
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" value="Login">
</form>
END;
echo $navigation;
echo $content;
?>

   
</body>
</html>