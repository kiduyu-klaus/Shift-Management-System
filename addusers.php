<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "header.php";
include_once("header.php");
include_once("navbar.php");

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database!");

// connect to mysql database
mysqli_select_db($connect, "shiftmanagent") or die("couldn't find database!");


$query = "SELECT * FROM `business`";
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2,$resulttype=MYSQLI_BOTH)) {
    $options = $options . "<option>$row2[1]</option>";
}

?>
<html>

<head>
	<style>
		body {
			background-color: white
		}

	</style>
</head>

<body>

	<br>
	<div class="container">
		<div class="row" align="center">
			<div class="col-lg-6">
				<div class="jumbotron">
					Here you will Add users, those employed by all your bussiness
					<form class="form-horizontal" method="post" action="add.user.php">
						<fieldset>

							<legend>Add Account Here</legend>
							<div class="form-group">
								<label class="col-md-4 control-label" for="username">Full name</label>
								<div class="col-md-5">
									<input id="username" name="fname" type="text" placeholder="" class="form-control input-md" required="">

								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="username">Phone</label>
								<div class="col-md-5">
									<input id="username" name="fphone" type="number" placeholder="" class="form-control input-md" required="">

								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="username">Id Number</label>
								<div class="col-md-5">
									<input id="username" name="fid" type="text" placeholder="" class="form-control input-md" required="">

								</div>
							</div>
							<div class="form-group">
                                    <label class="col-md-4 control-label" for="faculty">Business</label>
                                    <div class="col-md-5">
                                        <select id="faculty" name="business" class="form-control">
											<option>Choose a Business</option>
                                            <?php echo $options; ?>
                                        </select>
                                    </div>
                                </div>

							<div class="form-group" align="right">
								<label class="col-md-4 control-label" for="login"></label>
								<div class="col-md-5">
									<input type="submit" name="lgn" class="btn btn-success " value="Add">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>




			<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "footer.php";
			include_once("footer.php");
			include_once("navbar.php");
			?>