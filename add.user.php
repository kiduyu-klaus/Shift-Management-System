<?php

$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database!");
mysqli_select_db($connect, "shiftmanagent") or die("couldn't find database!");


$full = $_POST['fname'];
$phone = $_POST['fphone'];
$idnumber = $_POST['fid'];
$username = $_POST['business'];

$phonedigits = strlen($phone);


$sql = "INSERT INTO user (fullname,phone,idnumber,business,username, password) VALUES ('$full', '$phone','$idnumber',  '$username','','')";

if (!mysqli_query($connect, $sql)) {
    echo 'not registered' . mysqli_error($connect);
} else {
    echo '<script type="text/javascript">
                      alert("User Added!");
                         location="list.php";
                           </script>';
}
