<?php 
 
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'shiftmanagent'))
 {
	 echo 'database not selected';
 }

 $Room = $_POST['room'];

 
 $sql = "INSERT INTO business (name) VALUES ('$Room')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Business Added!");
                         location="home.php";
                           </script>';
 }
 

?>