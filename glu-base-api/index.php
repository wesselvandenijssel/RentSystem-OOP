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
<?php
// include the configs / constants for the database connection
 require_once("config/db.php");
// include "config/config.php";

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // show you are logged in screen
    include("views/logged_in.php");

} else {
    // show you are not logged in screen
    include("views/not_logged_in.php");
}
?>


<a href="product">products API</a>
<a href="product/read_all.php">products JSON</a><br>
<a href="category">category API</a>
<a href="category/read_all.php">category JSON</a>