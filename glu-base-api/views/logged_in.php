<?php
require_once("config/config.php");
?>
<div class="alert alert-success" role="alert">
    Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
    <li class="nav-item mt-2">
                    <a href="index.php?logout" type="button" class="btn btn-warning">Logout</a>
                </li>
</div>