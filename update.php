<?php

$con = mysql_connect("localhost","root","");
$db = mysql_select_db("police");


$strquery = "UPDATE reports SET fname= '" . $_GET['fname'] . "', sname= '". $_GET['sname'] ."', age= '".$_GET['age'] ."'             WHERE id='". $_GET['id'] ."' ";

$results=mysql_query($strquery) ;



if($results)
{
	?>
     <script>alert('SUCCESSFULLY UPDATED ');</script>
     <?php
	 
	 
}

else{
	
	?>
     <script>alert('FAILURE TO UPDATE!!!!!!..... ');</script>
     <?php
	 
	 
}


?>