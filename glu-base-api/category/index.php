<?php
require_once("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='assets/css/style.css' rel='stylesheet'>

    <title>API</title>
</head>
<body>
<div class="container">
    <div class="card-group">
        <div class='row'>
            <?php
        $liqry = $con->prepare("SELECT id, naam, beschrijving, toegevoegd_op, gewijzigd_op FROM category");
        if ($liqry === false) {
            echo mysqli_error($con);
        } else {
            $liqry->bind_result($id, $naam, $beschrijving, $toegevoegd_op, $gewijzigd_op);
            if ($liqry->execute()) {
                $liqry->store_result();
                ?>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                while ($liqry->fetch()) { 
                    ?>
                <a class="dropdown-item" href="?id=<?php echo $id;?>"><?php echo $id;?></a>

                <?php
            }
?>
            </div>
            <nav class="nav flex-column">
                <?php
                if (isset($_GET['id'])) {
                    $edit = $_GET["id"];
                }
                if (isset($_GET['id'])) {
                ?>
                <p>Currently edditing: <?php echo $edit;?></p>
                <?php
                }
                ?>
                <a class="nav-link" href="create.php">Create</a>
                <a class="nav-link" href="read.php">Read</a>
                <a class="nav-link" href="update.php?update=<?php echo $edit;?>">Update</a>
                <a class="nav-link" href="delete/delete.php?delete=<?php echo $edit;?>">Delete</a>
            </nav>

            <?php
                }
            }

            $liqry->close();
        

        ?>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/41c29a8a8f.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>