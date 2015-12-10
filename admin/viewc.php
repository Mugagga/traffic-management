<html>
<head>

<title>View records in the database</title>

<link href="../css/MYH.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body id="maine">



<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
 
 <br>
 <br>
 
 
 
<div id="button2"><button name="register" value="register" onClick="location.href='seach.php'">SEARCH </button> <button name="login" value="login" onClick="location.href='viewc.php'">VIEW</button> <button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button></div>



<br>
<br>





<h1 align="center" style="color:yellow"> DISPLAY ENTIRE RECORDS  </h1>
<table width="849" border="1" align="center">
<tr>

<td width="57"style="color:yellow"><strong> ID </strong></td>
<td width="150" style="color:yellow"><strong>First Name</strong></td>
<td width="150"style="color:yellow"><strong>Second Name</strong></td>
<td style="color:yellow"><strong>AGE</strong></td>
<td style="color:yellow"><strong>GENDER</strong></td>
<td style="color:yellow" width="245"><strong>VEHICLE NUMBER</strong></td>
<td style="color:yellow" width="289"><strong>CRIME COMMITTED</strong></td>

<td width="161"style="color:yellow"><strong> Actions </strong></td>
</tr>



<?php

$con=mysql_connect("localhost","root","") or die("Cannot connect to server");
$db=mysql_select_db("police") or die("Cannot connect to database");

$strquery="SELECT * from reports";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);



$x=0;
while ($i< $num)

{
$i=mysql_result($results,$x,"id");
$f2=mysql_result($results,$x,"fname");
$f3=mysql_result($results,$x,"sname");
$f4=mysql_result($results,$x,"age");
$f5=mysql_result($results,$x,"gender");
$f6=mysql_result($results,$x,"vehicle_number");
$f7=mysql_result($results,$x,"crime_committed");




?>


<tr>
<td style="color:yellow"><?php echo $i ; ?></td>
<td style="color:yellow"><?php echo $f2 ; ?></td>
<td style="color:yellow"><?php echo $f3 ; ?></td>
<td style="color:yellow"><?php echo $f4 ; ?></td>
<td style="color:yellow"><?php echo $f5 ; ?></td>
<td style="color:yellow"><?php echo $f6 ; ?></td>
<td style="color:yellow"><?php echo $f7 ; ?></td>
<td style="background-color:#999"><?php echo " <a href='edit.php?do=edit&id=" . $i . "'> EDIT </a> "; ?> | <?php echo " <a href='delete.php?id=" . $i . "'> DELETE </a> "; ?></td>
</tr>

<?php

  $i++;
  }
  ?>


















</body>
</html>