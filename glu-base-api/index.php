<?php
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// ...
$router->get('/test', function() {
    echo 'About Page Contents';
});
// Run it!
$router->run();
?>
<a href="product">products API</a>
<a href="product/read_all.php">products JSON</a><br>
<a href="category">category API</a>
<a href="category/read_all.php">category JSON</a>