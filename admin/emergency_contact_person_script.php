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
$emergency_contact_person_fname = $_POST['emergency_contact_person_fname'];
$emergency_contact_person_lname = $_POST['emergency_contact_person_lname'];
$emergency_contact_person_name = $emergency_contact_person_fname." ".$emergency_contact_person_lname;

//$emergency_contact_person_name = $_POST['emergency_contact_person_name'];
$emergency_contact_person_relationship = $_POST['emergency_contact_person_relationship'];
$emergency_contact_person_address_type = $_POST['emergency_contact_person_address_type'];
$emergency_contact_person_address_line1 = $_POST['emergency_contact_person_address_line1'];
$emergency_contact_person_address_line2 = $_POST['emergency_contact_person_address_line2'];
$emergency_contact_person_city = $_POST['emergency_contact_person_city'];
$emergency_contact_person_district = $_POST['emergency_contact_person_district'];
$emergency_contact_person_state = $_POST['emergency_contact_person_state'];
$emergency_contact_person_pin_code = $_POST['emergency_contact_person_pin_code'];
$emergency_contact_person_country_code = $_POST['emergency_contact_person_country_code'];
$emergency_contact_person_phone_type = $_POST['emergency_contact_person_phone_type'];
$emergency_contact_person_phone_number = $_POST['emergency_contact_person_phone_number'];
$emergency_contact_person_email_id = $_POST['emergency_contact_person_email_id'];

$sql = "insert into emergency_contact_person(patient_id,emergency_contact_person_name,emergency_contact_person_relationship,emergency_contact_person_address_type,emergency_contact_person_address_line_1,emergency_contact_person_address_line_2,emergency_contact_person_city,emergency_contact_person_district,emergency_contact_person_state,emergency_contact_person_pin_code,emergency_contact_person_country_code,emergency_contact_person_phone_type,emergency_contact_person_phone_number,emergency_contact_person_email_id) 
values('$patient_id','$emergency_contact_person_name', '$emergency_contact_person_relationship','$emergency_contact_person_address_type','$emergency_contact_person_address_line1','$emergency_contact_person_address_line2','$emergency_contact_person_city','$emergency_contact_person_district','$emergency_contact_person_state','$emergency_contact_person_pin_code','$emergency_contact_person_country_code','$emergency_contact_person_phone_type','$emergency_contact_person_phone_number','$emergency_contact_person_email_id')";
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
