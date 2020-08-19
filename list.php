<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
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
            <div align="center">
            <legend>List of jobs</legend></fieldset>
			<?php
				include_once("joblist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Employees</legend></fieldset>
			<?php 
              include_once("employeeslist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			
			<div align="center">
			<legend>List of Business</legend></fieldset>
			<?php
				 include_once("businesslist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Shift time</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>