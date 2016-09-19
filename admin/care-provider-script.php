<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$ecpid = $_POST['ecpid'];
	$reg_no =$_POST['reg_no'];
$care_provider_fname = $_POST['care_provider_fname'];
$care_provider_lname = $_POST['care_provider_lname'];
$care_provider_name = $care_provider_fname." "." ".$care_provider_lname;
$care_provider_address_type = $_POST['care_provider_address_type'];
$care_provider_address_line_1 = $_POST['care_provider_address_line_1'];
$care_provider_address_line_2 = $_POST['care_provider_address_line_2'];
$care_provider_city = $_POST['care_provider_city'];
$care_provider_district = $_POST['care_provider_district'];
$care_provider_state = $_POST['care_provider_state'];
$care_provider_pin_code = $_POST['care_provider_pin_code'];
$care_provider_country_code = $_POST['care_provider_country_code'];
$care_provider_phone_type = $_POST['care_provider_phone_type'];
$care_provider_phone_number = $_POST['care_provider_phone_number'];
$care_provider_email_id = $_POST['care_provider_email_id'];

$sql = "insert into care_provider (reg_no,care_provider_name,care_provider_address_type,care_provider_address_line_1,care_provider_address_line_2,care_provider_city,care_provider_district,care_provider_state,care_provider_pin_code,care_provider_country_code,care_provider_phone_type,care_provider_phone_number,care_provider_email_id) values('$reg_no','$care_provider_name','$care_provider_address_type','$care_provider_address_line_1','$care_provider_address_line_2','$care_provider_city','$care_provider_district','$care_provider_state','$care_provider_pin_code','$care_provider_country_code','$care_provider_phone_type','$care_provider_phone_number','$care_provider_email_id')";
//echo $sql;
$result=mysql_query($sql,$connection);
if(!$result)
{
	echo "error";
}
else
{
	header("location:admin_home.php");
}






?>
