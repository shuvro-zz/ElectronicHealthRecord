<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
   
$hos_id=$_POST['hos_id'];
$hos_name = $_POST['hos_name'];
$hos_add = $_POST['hos_add'];
$insure = $_POST['insure'];
$patient_id=$_POST['patient_id'];
$diagnosis = $_POST['diagnosis'];
$hospitalization_date = $_POST['hospitalization_date'];
$release_date = $_POST['release_date'];
$discharge_summery=$_POST['discharge_summery'];
$billing_amount = $_POST['billing_amount'];


$sql = "insert into hospitalization_history(hos_id,hos_name,hos_add,insure,diagnosis,hospitalization_date,release_date,discharge_summery,billing_amount) values('$hos_id', '$hos_name','$hos_add','$insure','$diagnosis','$hospitalization_date','$release_date','$discharge_summery','$billing_amount')";
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
