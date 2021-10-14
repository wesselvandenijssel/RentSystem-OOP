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
        $liqry = $con->prepare("SELECT id, category_id, naam, beschrijving, toegevoegd_op, gewijzigd_op FROM product");
        if ($liqry === false) {
            echo mysqli_error($con);
        } else {
            $liqry->bind_result($id, $category_id, $naam, $beschrijving, $toegevoegd_op, $gewijzigd_op);
            if ($liqry->execute()) {
                $liqry->store_result();
                while ($liqry->fetch()) { 
                
                    ?>
            <div class='col-md-3 '>
                <div class='mr-2'>
                    <div class="row">
                        <div class='card'>
                            <!-- <img class='card-img-top' src='assets/img/product.png' alt='Card image cap'> -->
                            <div class='card-body'>
                            <h5 class='card-title'>ID=<?php echo $id;?></h5>
                                    <p class='card-text'>category_id: <?php echo $category_id;?></p>
                                    <p class="card-text">beschrijving : <?php echo $beschrijving;?></p>
                                    <p class='card-text'>toegevoegd_op: <?php echo $toegevoegd_op;?></p>
                                    <p class='card-text'>gewijzigd_op: <?php echo $gewijzigd_op;?></p>
                            </div>
                            <!-- <div class='card-footer'>
                                    <small class='text-muted float-right'>dit zijn producten xD</small>
                                </div> -->
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <?php
                }
            }

            $liqry->close();
        }

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