<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$patient_id = $_SESSION['uhid'];
$immunization_name = $_POST['immunization_name'];
$given_date = $_POST['given_date'];

$due_date = $_POST['due_date'];



$sql = "insert into immunization(patient_id,immunization_name,given_date,due_date) values('$patient_id','$immunization_name','$given_date','$due_date')";
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
