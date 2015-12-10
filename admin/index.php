
<?php

if(isset($_POST["name"]) && isset($_POST["pass"])){
	if($_POST["name"] == 'police' && $_POST["pass"] == 'police'){		
		header("Location: ../admin/viewc.php");	
	} else {
		echo "<span style='color:yellow; font-size:22px'><blink>Incorrect Username/Password Combination!!!!!!!</blink></span>";	
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />

<link href="file:///C|/wamp/www/fyp/css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/MYH.css" rel="stylesheet" type="text/css" />




</head>
<body id="maine">
<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>



<p align="center" style="color:red">&nbsp;</p>
<div id="button" align="center"><button name="register" value="register" onclick="location.href='../register.php'">REGISTER</button> <button name="login" value="login" onclick="location.href='../login.php'">LOGIN</button><button name="admin" value="admin" onclick="location.href='index.php'">ADMIN</button><button name="home" value="home" onclick="location.href='../index.php'">HOME</button></div>
<br />











<div id="templatemo_container" align="center">
    

<h1 style="color:yellow">Administrator Login</h1>
<form method="post" action="index.php">
<table width="300px" border="1" cellpadding="2" cellspacing="2">
<tr><td><label for="name" style="color:yellow">Admin Name:</label>&nbsp;</td>
<td><input id="name" name="name" type="text" value="" placeholder="admin username" required /></td></tr>
<tr><td><label for="pass" style="color:yellow">Password:</label>&nbsp;</td>
<td><input id="pass" name="pass" type="password" value="" placeholder="*******" required /></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="Login" class="buy_now_button"/></td>
</tr>
</table>
</form>


</div>
    
<?php include_once("../footer.php"); ?>