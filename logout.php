<?php
session_start();


if(!isset($_SESSION['user']))
{
	header("location:index.php");
}

else if(isset($_SESSION['user'])!="")
{
	header("location:view.php");
}


if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("location:index.php");
}

?>