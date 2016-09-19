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
$temperature = $_POST['temperature'];
$convert = ($temperature -32)*5/9;
//$temp='$temperature'. '&deg;C';
$date = $_POST['date'];
$time=$_POST['time'];



$sql = "insert into temperature(patient_id,temperature,date,time) values('$patient_id','$convert','$date','$time')";
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
