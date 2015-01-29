<?php
session_start();
$dbHost = "silo.cs.indiana.edu";
$dbUserAndName = "b561f13_ggomatom";
$dbPass = "my+sql=b561f13_ggomatom";

mysql_connect ($dbHost, $dbUserAndName, $dbPass) or die ("Cannot connect to host $dbHost with user $dbUserAndName and the password provided.");
mysql_select_db ($dbUserAndName) or die ("Database $dbUserAndName not found on host $dbHost");;

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['gender'];
$eaddress=$_POST['email_address'];
$contact=$_POST['contact'];

$ans=$_POST['ans'];
$password=$_POST['password'];
$question=$_POST['question'];

mysql_query("INSERT INTO Users (email_address,phone_number, password,answer,first_name, last_name, gender,question)VALUES('$eaddress', '$contact', '$password','$ans','$fname', '$lname', '$gender','$question')");

header("location: index.php?remarks=success");
	
	
mysql_close($con);
?>