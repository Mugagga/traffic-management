<?php

session_start();

$conn = mysql_connect("localhost","root","")  or die("Couldnot connect to server");
$db=mysql_select_db("police");





$i= $_GET['id'];
$view = "SELECT * FROM  reports";
$results= mysql_query($view) or die("bad karma");
$row = mysql_fetch_array($results);



if(isset($_POST['sub'])){

	$ID = $_GET['id'];

	$fn = $_POST['fname'];
	$ln = $_POST['sname'];
	$a = $_POST['age'];
	$gen = $_POST['gender'];
	$v = $_POST['ves'];
	$cr = $_POST['crime'];
	
	
	
	$insert = "UPDATE reports set fname = '$fn', sname = '$ln', age= '$a', gender= '$gen', vehicle_number= '$v', crime_committed='$cr'";
	
	
	
	
	if(mysql_query($insert)== TRUE){

			echo "Sucessfully updated data";
			header('location:edit.php');			
	}else{

		echo "Ooppss cannot add data" . mysql_error();
		header('location:edit.php');
	}
	
	mysql_close($conn);
}




?>


<html>
<head>
<title>Edit The records</title>

<link href="../css/MYH.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">

</head>


<body id="maine">

<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
<br>
<br>
<br>



<div id="button2"><button name="register" value="register" onClick="location.href='seach.php'">SEARCH </button> <button name="login" value="login" onClick="location.href='viewc.php'">VIEW</button><button name="admin" value="admin" onClick="location.href='admin/index.php'">ADMIN</button> <button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button><button name="home" value="home" onClick="location.href='report.php'">REPORT</button></div>

<br>
<br>





<form  method="post">


<table align="center" width="620px" border="2" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2" style="color:yellow"><h1 align="center">UPDATE POLICE RECORDS</h1></td>
</tr>

<tr>
<td style="color:yellow" width="205"><b>FIRST NAME</b></td>
<td><input type="text" name="fname" id="fname" value="<?php echo $row["fname"];?>" ></td>
</tr>

<tr>
<td style="color:yellow"><b>SECOND NAME</b></td>
<td><input type="text" name="sname" id="sname" value="<?php echo $row["sname"];?>" ></td>
</tr>

<tr>
<td style="color:yellow"><b>AGE</b></td>
<td><input type="text" name="age" id="age" value="<?php echo $row["age"];?>" ></td>
</tr>

<tr>
<td style="color:yellow"><b>GENDER</b></td>
<td><input type="text" name="gender" id="gender" value="<?php echo $row["gender"];?>"></td>
</tr>

<tr>
<td style="color:yellow"><b>VEHICLE NUMBER PLATE</b></td>
<td><input type="text" name="ves" id="ves" value="<?php echo $row["vehicle_number"];?>" ></td>
</tr>

<tr>
<td style="color:yellow"><b>CRIME COMMITTED</b></td>
<td><input type="text" name="crime" id="crime" value="<?php echo $row["crime_committed"];?>"></td>
</tr>


<tr>
<td>&nbsp;</td>
<td><input type="submit" name="sub" value="UPDATE"></td>
</tr>


</table>
</form>


</body>
</html>










