<?php
//session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$patient_id = $_POST['patient_id'];
$diat_chart = $_POST['diat_chart'];
$date = $_POST['date'];
$life_style_change = $_POST['life_style_change'];


$sql = "insert into diat_chart(patient_id,diat_chart,date,life_style_change) values('$patient_id','$diat_chart', '$date','$life_style_change')";
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
