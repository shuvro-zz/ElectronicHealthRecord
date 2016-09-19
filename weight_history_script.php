<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$encounter_id = $_POST['encounter_id'];
$patient_id = $_SESSION['uhid'];
$weight = $_POST['weight'];
$date = $_POST['date'];


$sql = "insert into weight(patient_id,weight,date) values('$patient_id','$weight','$date')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	header("location:homepage.php");
}





?>
