<?php
require_once("../config/config.php");
if (isset($_GET['update'])) {
    $edit = $_GET["update"];
}
else{
    echo "<div class='alert alert-danger' role='alert'>
    You are not changing anything!
  </div>";
}
$liqry = $con->prepare("SELECT id, category_id, naam, beschrijving, toegevoegd_op, gewijzigd_op FROM product");
        if ($liqry === false) {
            echo mysqli_error($con);
        } else {
            $liqry->bind_result($id, $category_id, $naam, $beschrijving, $toegevoegd_op, $gewijzigd_op);
            if ($liqry->execute()) {
                $liqry->store_result();
                while ($liqry->fetch()) { 
                }
            }
        }
        
                    ?>
    <div id="frmRegistration">
        <form class="form-horizontal" action="update/update.php?update=<?php echo $edit;?>"method='POST'>
            <h1>Update data</h1>
            <div class="form-group">

                <label class="control-label col-sm-2" for="title">category_id:</label>
                <div class="col-sm-6">
                    <input type="text" name="category_id" class="form-control" id="category_id"
                        placeholder="category_id" required value="<?php echo $category_id;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="author" >naam:</label>
                <div class="col-sm-6">
                    <input type="text" name="naam" class="form-control" id="naam" placeholder="naam" required value="<?php echo $naam;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="beschrijving">beschrijving:</label>
                <div class="col-sm-6">
                    <input type="text" name="beschrijving" class="form-control" id="beschrijving" placeholder="beschrijving" required value="<?php echo $beschrijving;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="format">toegevoegd_op:</label>
                <div class="col-sm-6">
                    <input type="text" name="toegevoegd_op" class="form-control" id="toegevoegd_op" placeholder="toegevoegd_op" required value="<?php echo $toegevoegd_op;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="publisher">gewijzigd_op:</label>
                <div class="col-sm-6">
                    <input type="text" name="gewijzigd_op" class="form-control" id="gewijzigd_op" placeholder="gewijzigd_op" required value="<?php echo $gewijzigd_op;?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>