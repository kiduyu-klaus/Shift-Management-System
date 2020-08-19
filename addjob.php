<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
   
$hostname = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database!");

// connect to mysql database
mysqli_select_db($connect, "shiftmanagent") or die("couldn't find database!");


$query = "SELECT * FROM `business`";
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[1]</option>";
}

?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will Assign A Job to your Business
				<form class="form-horizontal" method= "post" action="add.job.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Add Business Job</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Job Name</label>  
				  <div class="col-md-5">
				  <input id="falname" name="jobname" type="text" placeholder="" class="form-control input-md" required="">
					
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
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Add Job</button>
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