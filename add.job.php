<?php 
 
 include('config.php');	
 $job_Name = $_POST['jobname'];
 $business = $_POST['business'];
 
 $sql = "INSERT INTO job (name, business) VALUES ('$job_Name', '$business')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New Job Added!");
                         location="home.php";
                           </script>';
 }


?>