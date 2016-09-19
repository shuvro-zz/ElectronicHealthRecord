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
$urea = $_POST['urea'];
$creotanin = $_POST['creotanin'];
$date = $_POST['date'];




$sql = "insert into kidny_function_test(patient_id,urea,creotanin,date) values('$patient_id','$urea','$creotanin','$date')";
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
