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
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$tsh = $_POST['tsh'];
$date = $_POST['date'];




$sql = "insert into thyroid(patient_id,t1,t2,tsh,date) values('$patient_id','$t1','$t2','$tsh','$date')";
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
