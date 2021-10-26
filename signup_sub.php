<?php
/* For signin system */
include("class/users.php"); // class page
$register = new users;
extract($_POST);//fetch the signin form value 
$query = "INSERT INTO signup(`name`,`username`,`email`,`pass`) VALUES('".$n."','".$u."','".$e."','".$p."')"; //insert value to database signup

if($register->signup($query))
{
	$register->url("login.php?run=success"); //correctly store value to database
}
?>    