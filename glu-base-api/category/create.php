<?php
include_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change category data</title>
</head>

<body>
    <h1>Change category data</h1>

    <form action="../objects/category.php" method="GET">
        <p>
            <label for="sort">Sort:</label>
            <input type="text" name="sort" id="sort">
        </p>
        <input type="submit" value="Submit">
    </form>
</body>

</html>