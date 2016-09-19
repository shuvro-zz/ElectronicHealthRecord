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
$fasting = $_POST['fasting'];
$pp = $_POST['pp'];
$date = $_POST['date'];


$sql = "insert into blood_sugar(patient_id,fasting,pp,date) values('$patient_id', '$fasting','$pp','$date')";
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
