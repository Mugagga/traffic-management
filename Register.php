<?php
session_start();


if(isset($_SESSION['user'])!="")
{

   header("Location: Register.php");
   
}
   
   
   
   
   include_once('connection.php');
   
   
   
   
   if(isset($_POST['submit']))
   {
   
      $fname=mysql_real_escape_string($_POST['fname']);
      $sname=mysql_real_escape_string($_POST['sname']);
      $uname=mysql_real_escape_string($_POST['uname']);
      $pass=md5(mysql_real_escape_string($_POST['password']));
      
      
      
      
      $ins="INSERT INTO users(fname,sname,uname,password) VALUES('$fname','$sname','$uname','$pass')";
      $results=mysql_query($ins);
      
      if($results)
      
      {
      
         ?>
         <script>alert('Officer You have successfully Registered!! please Login');</script>
        
         
         <?php
         
         
         }
         
         
         else
         {
         
            ?>
            <script>alert('There is An ERROR while Registering You');</script>
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
<title>Register | php</title>





</head>

<body id="maine">




<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
<p align="center" style="color:red">&nbsp;</p>
<div id="button2"><button name="register" value="register" onClick="location.href='register.php'">REGISTER</button> <button name="login" value="login" onClick="location.href='login.php'">LOGIN</button><button name="admin" value="admin" onClick="location.href='admin/index.php'">ADMIN</button><button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button><button name="home" value="home" onClick="location.href='index.php'">HOME</button></div>

<br />
<br />

<form name="form1" method="post">

<table id="tablet" width="400px" align="center"  border="1" cellpadding="1" cellspacing="1">
<tr>
<td colspan="2"><h1 align="center" style="color:yellow" >REGISTER</h1>
<p align="center">&nbsp;</p></td>
</tr>

<tr>
<td style="color:yellow"><strong>First Name</strong></td>
<td><input type="text" name="fname" required style="width: 181px"/></td>
</tr>


<tr>
<td style="color:yellow"><strong>Second Name</strong></td>
<td><input type="text" name="sname" required style="width: 180px" /></td>
</tr>



<tr>
<td style="color:yellow"><strong>UserName</strong></td>
<td><input type="text" name="uname" required style="width: 180px" /></td>
</tr>



<tr>
<td style="color:yellow"><strong>Password</strong></td>
<td><input  type="password" name="password" required style="width: 180px" /></td>
</tr>













<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit"  value="REGISTER" >  &nbsp; &nbsp; &nbsp; &nbsp;<input type="reset" name="reset" value="RESET"></td>

</tr>








</table>
</form>

</body>
</html>