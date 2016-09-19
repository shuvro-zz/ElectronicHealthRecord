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
$diagnosis = $_POST['diagnosis'];
$vital = $_POST['vital'];
$health_care_person = $_POST['health_care_person'];
$contact_no = $_POST['contact_no'];
$date = $_POST['date'];



$sql = "insert into medication_history(patient_id,diagnosis,vital,health_care_person,contact_no,date) values('$patient_id','$diagnosis','$vital','$health_care_person','$contact_no','$date')";
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
