<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>delete_product</title>
</head>
<body>


<?php
include_once('template.php');
var_dump($_GET)
if (isset($_GET['id']) and isset($_SESSION['userId'])) {
 $query = <<<END
DELETE FROM products
 WHERE id = '{$_GET['id']}'
END;
 $mysqli->query($query);
 header('Location:products.php');
}
echo $navigation;
?>


</body>
</html>
