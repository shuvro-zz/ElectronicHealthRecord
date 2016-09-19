<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$patient_id = $_POST['patient_id'];
$hos_id = $_POST['hos_id'];
$surgery_type = $_POST['surgery_type'];
$surgery_description = $_POST['surgery_description'];
$surgery_date = $_POST['surgery_date'];


$sql = "insert into surgery(patient_id,hos_id,surgery_type,surgery_description,surgery_date) values('$patient_id','$hos_id', '$surgery_type','$surgery_description','$surgery_date')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	header("location:admin_home.php");
}





?>
