<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$encounter_id = $_POST['encounter_id'];
$episode_type = $_POST['episode_type'];
$episode_number = $_POST['episode_number'];
$encounter_type = $_POST['encounter_type'];
$encounter_number = $_POST['encounter_number'];
$encounter_date_and_time = $_POST['encounter_date_and_time'];
$reason_for_visit = $_POST['reason_for_visit'];
$present_history=$_POST['present_history'];
$past_history=$_POST['present_history'];
$personal_history=$_POST['present_history'];
$family_history=$_POST['present_history'];
$menstrual_history=$_POST['menstrual_history'];
$diagnosis_description =$present_history.",".$past_history.",".$personal_history.",".$family_history.",".$menstrual_history;


$sql = "insert into encounter(episode_type,episode_number,encounter_type,encounter_number,encounter_date_and_time,reason_for_visit,diagnosis_description) values('$episode_type', '$episode_number','$encounter_type','$encounter_number','$encounter_date_and_time','$reason_for_visit','$diagnosis_description')";
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
