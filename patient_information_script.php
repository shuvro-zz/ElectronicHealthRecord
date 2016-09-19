<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$uhid = $_POST['uhid'];
$alternate_uhid = $_POST['alternate_uhid'];
//$patient_fnanme = $_POST['patient_fname'];
//$patient_lnanme = $_POST['patient_lname'];
//$patient_nanme= $patient_fnanme." ".$patient_lnanme;
$cal_date=$_POST['patient_date_of_birth'];
$patient_date_of_birth = date('d-m-Y',strtotime($cal_date));
$patient_age = $_POST['patient_age'];
$patient_gender = $_POST['patient_gender'];
$patient_height = $_POST['patient_height'];
$patient_chest = $_POST['patient_chest'];
$patient_waist = $_POST['patient_waist'];
$patient_blood_group = $_POST['patient_blood_group'];
$patient_occupation = $_POST['patient_occupation'];
$patient_address_type = $_POST['patient_address_type'];
$patient_address_line_1 = $_POST['patient_address_line_1'];
$patient_address_line_2 = $_POST['patient_address_line_2'];
$patient_city = $_POST['patient_city'];
$patient_state = $_POST['patient_state'];
$patient_district = $_POST['patient_district'];
$patient_pin_code = $_POST['patient_pin_code'];
$patient_country_code = $_POST['patient_country_code'];
//$patient_phone_type = $_POST['patient_phone_type'];
//$patient_phone_number = $_POST['patient_phone_number'];
//$patient_email_id = $_POST['patient_email_id'];
$insurance_status = $_POST['insurance_status'];
$insurance_id = $_POST['insurance_id'];
$insurance_company = $_POST['insurance_company'];
$insurance_amount = $_POST['insurance_amount'];
$organ_donor_status = $_POST['organ_donor_status'];
//$patient_image = $_POST['patient_image'];
$timestamp=time();
$patient_image = $_FILES['patient_image']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $patient_image ) > 0)
{
$pic=1;
$ary=explode("." , $patient_image);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["patient_image"]["tmp_name"],
      "upload/".$newfilename);
}

if (strlen($newfilename)>0)
{
$email=$_SESSION['uid'];

$sql = "UPDATE patient_info SET alternate_uhid='$alternate_uhid',patient_date_of_birth='$patient_date_of_birth',patient_age='$patient_age',patient_gender='$patient_gender',patient_height='$patient_height',patient_chest='$patient_chest',patient_waist='$patient_waist',patient_blood_group='$patient_blood_group',patient_occupation='$patient_occupation',patient_address_type='$patient_address_type',patient_address_line_1='$patient_address_line_1',patient_address_line_2='$patient_address_line_2',patient_city='$patient_city',patient_state='$patient_state',patient_district='$patient_district',patient_pin_code='$patient_pin_code',patient_country_code='$patient_country_code',insurance_status='$insurance_status',insurance_id='$insurance_id',insurance_company='$insurance_company',insurance_amount='$insurance_amount',organ_donor_status='$organ_donor_status',patient_image='$newfilename' where patient_email_id='$email'";

}
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
