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
$alg_name = $_POST['alg_name'];
$triggered_by = $_POST['triggered_by'];
$allergies_status = $_POST['allergies_status'];

$sql = "insert into allergies (patient_id,alg_name,triggered_by,allergies_status) values('$patient_id','$alg_name','$triggered_by','$allergies_status')";
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
