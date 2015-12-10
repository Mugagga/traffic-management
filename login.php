<?php
session_start();
include_once 'connection.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: report.php");
}


	
	if(isset($_POST['sub']))
	{
		$unamet=mysql_real_escape_string($_POST['uname']);
		$passt=mysql_real_escape_string($_POST['pass']);
		
		
		$res=mysql_query("SELECT * FROM users WHERE uname='$unamet'");
		
		$row=mysql_fetch_array($res);
		
		if($row['uname']==($unamet))
		{
			
			header("Location: report.php");
		}
		
		else
		{
			?>
			<script>alert('Wrong Username Or password Hackers Go AWAY!!!!!!!');</script>
			<?php
		}
		
		
	}

?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/MYH.css" rel="stylesheet" type="text/css" />
<title>Login | php</title>





</head>

<body id="maine">




<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
<p align="center" style="color:red">&nbsp;</p>



<div id="button2"><button name="register" value="register" onClick="location.href='register.php'">REGISTER</button> <button name="login" value="login" onClick="location.href='login.php'">LOGIN</button><button name="admin" value="admin" onClick="location.href='admin/index.php'">ADMIN</button> <button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button>

<br />
<br />
<br />


<div id="table">

<form method="post">

<table width="450px" border="2" cellpadding="2" cellspacing="2" align="center">


<tr>
<td align="center"  colspan="2"><h1 style="color: #fce903">LOGIN PAGE</h1></td>

	
</tr>


<tr>
<td style="color:#faee05">USERNAME</td>
<td><input  type="text" name="uname" placeholder="username" required/></td>	
	
	
	
</tr>


<tr>
	
<td style="color:#fbf404">PASSWORD</td>
<td><input   type="password" name="pass" placeholder="password" required/></td>
</tr>

<tr>
	
	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  type="submit" name="sub">LOGIN</button></td>
</tr>
	
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
</table>	
</form>
</body>
</html>


