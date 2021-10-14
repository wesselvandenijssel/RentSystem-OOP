<!--
Here, we write code for registration.
-->
<?php
require_once('../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>API</title>
</head>
<body>
	<form action="create/create.php" method='POST'>
			<div class="form-group">
                <label class="control-label col-sm-2" for="category_id" >category_id:</label>
                <div class="col-sm-6">
                    <input type="number" name="category_id" class="form-control" id="category_id" placeholder="category_id" required>
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="naam" >naam:</label>
                <div class="col-sm-6">
                    <input type="text" name="naam" class="form-control" id="naam" placeholder="naam" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="beschrijving">beschrijving:</label>
                <div class="col-sm-6">
                    <input type="text" name="beschrijving" class="form-control" id="beschrijving" placeholder="beschrijving" required>
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="toegevoegd_op">toegevoegd_op:</label>
                <div class="col-sm-6">
                    <input type="datetime-local" name="toegevoegd_op" class="toegevoegd_op" id="toegevoegd_op" placeholder="toegevoegd_op" required>
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="gewijzigd_op">gewijzigd_op:</label>
                <div class="col-sm-6">
                    <input type="datetime-local" name="gewijzigd_op" class="form-control" id="gewijzigd_op" placeholder="gewijzigd_op" required>
                </div>
            </div>
			<button type="submit" name="update" id="gewijzigd_op" class="btn btn-primary">Submit</button>
			</form>
</body>
</html>