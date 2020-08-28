<?php
$dbuser="thebookh_kiduyu_k";
$dbpass="kiduyuKLAUS1995";
$host="localhost";
$db="thebookh_e_books_app";

$con = mysqli_connect ($host,$dbuser, $dbpass, $db);
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'shiftmanagent'))
 {
	 echo 'database not selected';
 }
 ?>