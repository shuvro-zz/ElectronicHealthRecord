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
$sgpt = $_POST['sgpt'];
$sgot = $_POST['sgot'];

$date = $_POST['date'];



$sql = "insert into lft (patient_id,sgpt,sgot,date) values('$patient_id','$sgpt','$sgot','$date')";
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
