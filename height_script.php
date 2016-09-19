<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$lab_result_id = $_POST['lab_result_id'];
$patient_id = $_SESSION['uhid'];
$height = $_POST['hight'];
$date = $_POST['date'];




$sql = "insert into height(patient_id,hight,date) values('$patient_id','$height','$date')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	
	header("location:homepage.php");
}


?>
