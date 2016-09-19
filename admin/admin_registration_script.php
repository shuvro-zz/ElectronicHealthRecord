<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$patient_fnanme = $_POST['patient_fname'];
//$patient_lnanme = $_POST['patient_lname'];
//$patient_nanme= $patient_fnanme." ".$patient_lnanme;
//$contact_no = $_POST['contact_no'];
$email_address = $_POST['email_address'];

$password = $_POST['password'];
//$confrim_password = $_POST['confrim_password'];
//if($password==$confrim_password){

$sql = "insert into admin_login(email_id,p_password) values('$email_address','$password')";


//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{
	
	echo"error";
	
}

else
{
	//$_SESSION['uid']=$email;
	//echo"ok";
	header("location:login.php");
}





?>
