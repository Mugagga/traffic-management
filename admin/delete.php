<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("police");




$i = $_GET['id'];

$query = "Delete FROM reports where id ='$i' ";
$results=mysql_query ($query);


if($results === true){
		
			?>
			<script>alert('Successfully deleted record!!!!!!!');</script>
			<?php
			
			header('location:viewc.php');
		
	}else{
		echo " Error UNSUCCESSFUL ATTEMPT ";
	}



?>