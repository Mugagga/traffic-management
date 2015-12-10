<?php

$con=mysql_connect("localhost","root","") or die("Couldnot connect to server");
$db=mysql_select_db("police") or die("couldnot connect to database !!!!!!!........");
$output='';

if(isset($_POST['fname']))
{
	
    $searchq=$_POST['fname'];
	$searchq=preg_replace("#[^0-9 a-z]#i","",$searchq);
	
	
	$query=mysql_query("SELECT * FROM reports WHERE fname LIKE '%$searchq%' OR sname LIKE '%$searchq%'  OR age LIKE '%$searchq%'  OR gender LIKE '%$searchq%' OR vehicle_number LIKE '%$searchq%' or crime_committed LIKE '%$searchq%'   ") or die("Could not search");
	$count=mysql_num_rows($query);
	
	if($count==0)
	{
		?>
        <script>alert('SORRY THAT PERSON DOESNOT EXIST IN THE RECORDS');</script>
        <?php
	}
	else
	{
		while($row=mysql_fetch_array($query))
		{
			$fn=$row['fname'];
			$ln=$row['sname'];
			$i=$row['id'];
			$a=$row['age'];
			$gen=$row['gender'];
			$res=$row['vehicle_number'];
			$crime=$row['crime_committed'];
			
			$output.='<div>'.$fn.''.$ln.'</div>';
	
}

}







}
?>





 <html>
 <head>
 
 <title> Search Offenders</title>
 <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/MYH.css" rel="stylesheet" type="text/css">
 
 </head>
 <body id="maine">
 
 <h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>
 
 <br>
 <br>
 
 
 
<div id="button2"><button name="register" value="register" onClick="location.href='seach.php'">SEARCH </button> <button name="login" value="login" onClick="location.href='viewc.php'">VIEW</button> <button name="logout" value="logout" onClick="location.href='logout.php'">LOG OUT</button></div>



<br />
<br />
 
 
 <form action="seach.php" method="post">
 
 <table  width="400px" align="center"  border="2" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2"><h1 align="center" style="color:yellow">SEARCH OFFENDER</h1>
<p align="center">&nbsp;</p></td>
</tr>

<tr>
<td style="color:yellow"><strong>Name</strong></td>
<td><input type="text" name="fname" required width="192px"></td>
</tr>





<tr>
<td>&nbsp;</td>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub"  value="SEARCH" ></td>

</tr>

 </table>
 </form>
 
 
 <br>
 <br>
 <br>
 
 <h1 align="center" style="color:yellow">DISPLAYING  RESULTS.......</h1>
 
 <table width="850px" border="2" cellpadding="2" cellspacing="2" align="center">
 <tr>
 <td style="color:yellow"><strong>ID</strong></td>
 <td style="color:yellow"><strong>FIRST NAME</strong></td>
 <td style="color:yellow"><strong>SECOND NAME</strong></td>
 <td style="color:yellow"><strong>AGE</strong></td>
 <td style="color:yellow"><strong>GENDER</strong></td>
 <td style="color:yellow"><strong>CRIME COMMITTED</strong></td>
 <td style="color:yellow"><strong>VEHICLE NUMBER</strong></td>
  <td style="color:yellow"><strong>ACTIONS</strong></td>
 
 </tr>
 
 <tr>
 <td style="color:#FF0"><strong><?php print("$i");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$fn");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$ln");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$a");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$gen");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$crime");?></strong></td>
 <td style="color:#FF0"><strong><?php print("$res");?></strong></td>
 <td  style="background-color:#999"><strong><?php echo "<a href='edit.php?do=edit$id=" .$i. "'>EDIT </a>";?> |  <?php echo " <a href='delete.php?id=" . $i . "'> DELETE </a> "; ?>
 </tr>
 </table>
 
 </body>
 </html>
 
 
 
 
 
 
  