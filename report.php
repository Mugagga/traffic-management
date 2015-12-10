<?php
session_start();


if(isset($_SESSION['user'])!="")
{
	header("Location:report.php");
}

mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("police") or die("Cannot connect to Database");


if(isset($_POST['sub']))
{
	
	$fn = mysql_real_escape_string($_POST['fname']);
	$ln = mysql_real_escape_string($_POST['sname']);
	$a = mysql_real_escape_string($_POST['age']);
	$gen = mysql_real_escape_string($_POST['gender']);
	$res = mysql_real_escape_string($_POST['res']);
	$cr = mysql_real_escape_string($_POST['crime']);
	
	
	$inst="INSERT INTO reports(fname,sname,age,gender,vehicle_number,crime_committed) VALUES ('$fn','$ln','$a','$gen','$res','$cr')";
	$result=mysql_query($inst);
	
	
	
	
	if($result)
	{
		?>
        <script>alert('SUCCESSFULLY ADDED OFFENDER');</script>
        <?php
		
	}
	
	else{
		?>
        <script>alert('ERROR OFENDER NOT ADDED');</script>
        <?php
		
	}
	
	
	
}
	



?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report Offenders</title>
<link href="css/MYH.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="maine">



<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
<br />
<br />
<br />


<div id="button2"> <button name="admin" value="admin" onClick="location.href='admin/index.php'">ADMIN</button> <button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button> <button name="home" value="home" onClick="location.href='index.php'">HOME</button> </div>


<br>
<br>


<form method="post" action="report.php">
<table width="500px" border="2" cellpadding="2" cellspacing="2" align="center">

<tr>
<td colspan="2" style="color:yellow"><h1 align="center">REPORT OFFENSE</h1></td>
</tr>


<tr>
<td style="color:yellow" width="200">FIRST NAME</td>
<td><input type="text" name="fname" required  / ></td>
</tr>



<tr>
<td style="color:yellow">SECOND NAME</td>
<td><input type="text" name="sname" required /></td>
</tr>


<tr>
<td style="color:yellow">AGE</td>
<td><input type="text" name="age" required /></td>
</tr>


<tr>
<td style="color:yellow">GENDER</td>
<td><input type="text" name="gender" required /></td>
</tr>


<tr>
<td style="color:yellow">VEHICLE NUMBER PLATE</td>
<td><input type="text" name="res" required /></td>
</tr>


<tr>
<td style="color:yellow">CRIME COMMITTED</td>
<td><input type="text" name="crime" required /></td>
</tr>




<tr>
<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="sub" value="REPORT" /></td>
</tr>

</table>
</form>




















</body>
</html>