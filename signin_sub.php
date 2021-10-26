<?php
/* For login system */
include("class/users.php"); // class page
$signin = new users;
extract($_POST); // fetch the login form value
if($signin->signin($u,$p)) // passing the username and password
{
	$signin->url("home.php"); // redirrect to home page
}
else
{
	$signin->url("login.php?run=failed"); // if incorrect then same page
}


?>