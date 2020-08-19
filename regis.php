<?php 
 
 $connect = mysqli_connect("localhost", "root", "")or die("couldn't connect to the database!");
	 mysqli_select_db($connect,"shiftmanagent") or die ("couldn't find database!");
	 
 
 $full = $_POST['fname'];
 $phone = $_POST['fphone'];
 $idnumber = $_POST['fid'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password2 = $_POST['password2'];

 $phonedigits=strlen($phone);
 if ($phonedigits < 10 || $phonedigits >11) {
	echo '<script type="text/javascript">
	alert("Invalid Phone Number!");
	   location="register.php";
		 </script>';
 } else {
	 if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $phone)) {
		echo '<script type="text/javascript">
		alert("Invalid Phone Number format!");
		   location="register.php";
			 </script>';
	 } 
	 if ($password!= $password2)
 {
	echo '<script type="text/javascript">
	alert("Oops! Passwords did not match! Try again. ");
	   location="register.php";
		 </script>';
 } else {

	$sql = "INSERT INTO admin (fullname,phone,idnumber,username, password) VALUES ('$full', '$phone','$idnumber',  '$username', 'md5($password)')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not registered';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("Welcome! Your account has been created. please login to manage your schedules!");
                         location="index.php";
                           </script>';
 }

 }
	 
	 
 }
