<?php 
 include('config.php');
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